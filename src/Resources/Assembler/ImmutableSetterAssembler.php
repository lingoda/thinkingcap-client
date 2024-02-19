<?php

namespace Lingoda\ThinkingcapBundle\Resources\Assembler;

use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\Util\Normalizer;
use Phpro\SoapClient\CodeGenerator\LaminasCodeFactory\DocBlockGeneratorFactory;
use Phpro\SoapClient\Exception\AssemblerException;
use Laminas\Code\Generator\MethodGenerator;

class ImmutableSetterAssembler implements AssemblerInterface
{
    private ImmutableSetterAssemblerOptions $options;

    public function __construct(ImmutableSetterAssemblerOptions $options = null)
    {
        $this->options = $options ?? new ImmutableSetterAssemblerOptions();
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
            $methodName = Normalizer::generatePropertyMethod('with', $property->getName());
            $class->removeMethod($methodName);
            $lines = [
                sprintf('$new = clone $this;'),
                sprintf('$new->%1$s = $%1$s;', $property->getName()),
                '',
                sprintf('return $new;'),
            ];
            $parameterOptions = ['name' => $property->getName()];
            if ($this->options->useTypeHints()) {
                $parameterOptions['type'] = $this->options->useNillable() ? $property->getPhpType() : str_replace('?', '',
                    $property->getPhpType());
            }

            $methodGenerator = new MethodGenerator($methodName);
            $methodGenerator->setParameters([$parameterOptions]);
            $methodGenerator->setBody(implode($class::LINE_FEED, $lines));
            if ($this->options->useReturnTypes()) {
                $methodGenerator->setReturnType('static');
            }
            if ($this->options->useDocBlocks()) {
                $methodGenerator->setDocBlock(DocBlockGeneratorFactory::fromArray([
                    'tags' => [
                        [
                            'name' => 'param',
                            'description' => !$this->options->useNillable() ? str_replace('null | ', '',$property->getDocBlockType()) : $property->getDocBlockType(),
                        ],
                        [
                            'name' => 'return',
                            'description' => 'static',
                        ],
                    ],
                ]));
            }
            $class->addMethodFromGenerator($methodGenerator);
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }
}
