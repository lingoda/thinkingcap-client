<?php

namespace Lingoda\ThinkingcapBundle\Resources\Assembler;

use Laminas\Code\Generator\DocBlockGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\Model\Property;
use Phpro\SoapClient\CodeGenerator\Util\Normalizer;
use Phpro\SoapClient\Exception\AssemblerException;
use Laminas\Code\Generator\MethodGenerator;
use Soap\Engine\Metadata\Model\TypeMeta;

class GetterAssembler implements AssemblerInterface
{
    private GetterAssemblerOptions $options;

    public function __construct(GetterAssemblerOptions $options = null)
    {
        $this->options = $options ?? new GetterAssemblerOptions();
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

        // Property might be forced to be nullable by the code generator.
        if ($this->options->useOptionalValue()) {
            $property = $property->withMeta(fn(TypeMeta $meta): TypeMeta => $meta->withIsNullable(true));
        }

        try {
            $prefix = $this->getPrefix($property);
            if(empty($prefix)){
                throw new AssemblerException('Prefix is empty');
            }
            $methodName = Normalizer::generatePropertyMethod($prefix, $property->getName());
            $class->removeMethod($methodName);

            $methodGenerator = new MethodGenerator($methodName);
            $methodGenerator->setVisibility(MethodGenerator::VISIBILITY_PUBLIC);
            $methodGenerator->setBody(sprintf('return $this->%s;', $property->getName()));

            if ($this->options->useReturnType()) {
                $phpType = $this->options->useNillable() ? $property->getPhpType() : str_replace('?', '',
                    $property->getPhpType());
                $methodGenerator->setReturnType($phpType);
            }

            if ($this->options->useDocBlocks()) {
                $methodGenerator->setDocBlock(
                    (new DocBlockGenerator())
                        ->setWordWrap(false)
                        ->setTags([
                            [
                                'name'        => 'return',
                                'description' => !$this->options->useNillable() ? str_replace('null | ', '',$property->getDocBlockType()) : $property->getDocBlockType(),
                            ],
                        ])
                );
            }

            $class->addMethodFromGenerator($methodGenerator);
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }

    public function getPrefix(Property $property): string
    {
        if (!$this->options->useBoolGetters()) {
            return 'get';
        }

        return $property->getType() === 'bool' ? 'is' : 'get';
    }
}
