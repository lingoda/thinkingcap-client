<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Resources\Assembler;

use Exception;
use Laminas\Code\Generator\MethodGenerator;
use Lingoda\ThinkingcapBundle\Exception\MissingFieldException;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\Util\Normalizer;
use Phpro\SoapClient\Exception\AssemblerException;

/**
 * Adds ensure<Field>() next to the nullable get<Field>() getters selected by the options: same value,
 * but throws when it is missing.
 *
 * Must be registered after the getter rule: it reads the getter that rule generated, so it follows
 * the nullability the WSDL declares.
 */
class EnsureGetterAssembler implements AssemblerInterface
{
    public function __construct(
        private readonly EnsureGetterAssemblerOptions $options,
    ) {
    }

    public function canAssemble(ContextInterface $context): bool
    {
        return $context instanceof PropertyContext;
    }

    /**
     * @param PropertyContext $context
     */
    public function assemble(ContextInterface $context): void
    {
        $class = $context->getClass();
        $property = $context->getProperty();

        try {
            $getterName = Normalizer::generatePropertyMethod('get', $property->getName());
            $ensureName = Normalizer::generatePropertyMethod('ensure', $property->getName());
            $class->removeMethod($ensureName);

            if (!$this->options->matches($context->getType()->getName(), $property->getName())) {
                return;
            }

            $getter = $class->getMethod($getterName);
            if ($getter === false) {
                return;
            }

            // generate(), not __toString(): the latter drops the leading `?`
            $returnType = $getter->getReturnType()?->generate() ?? '';
            if (!str_starts_with($returnType, '?')) {
                return;
            }

            $methodGenerator = new MethodGenerator($ensureName);
            $methodGenerator->setVisibility(MethodGenerator::VISIBILITY_PUBLIC);
            $methodGenerator->setReturnType(mb_substr($returnType, 1));
            // `??` instead of `=== null`: some generated properties have no default and stay uninitialized
            $methodGenerator->setBody(sprintf(
                'return $this->%1$s ?? throw \\%2$s::create(self::class, \'%1$s\');',
                $property->getName(),
                MissingFieldException::class
            ));

            $class->addMethodFromGenerator($methodGenerator);
        } catch (Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }
}
