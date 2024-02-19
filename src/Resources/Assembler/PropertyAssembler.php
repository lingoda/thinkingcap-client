<?php

namespace Lingoda\ThinkingcapBundle\Resources\Assembler;

use Laminas\Code\Generator\TypeGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\LaminasCodeFactory\DocBlockGeneratorFactory;
use Phpro\SoapClient\Exception\AssemblerException;
use Laminas\Code\Generator\PropertyGenerator;
use Soap\Engine\Metadata\Model\TypeMeta;

class PropertyAssembler implements AssemblerInterface
{
    private PropertyAssemblerOptions $options;

    public function __construct(?PropertyAssemblerOptions $options = null)
    {
        $this->options = $options ?? PropertyAssemblerOptions::create();
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

        // Always make sure properties are nullable!
        if ($this->options->useOptionalValue()) {
            $property = $property->withMeta(fn(TypeMeta $meta): TypeMeta => $meta->withIsNullable(true));
        }

        try {
            // This makes it easier to overwrite the default property assembler with your own:
            // It will remove the existing one and recreate the property
            if ($class->hasProperty($property->getName())) {
                $class->removeProperty($property->getName());
            }

            $propertyGenerator = PropertyGenerator::fromArray([
                'name' => $property->getName(),
                'visibility' => $this->options->visibility(),
                'omitdefaultvalue' => !$this->options->useOptionalValue(),
            ]);

            if ($this->options->useDocBlocks()) {
                $propertyGenerator->setDocBlock(
                    DocBlockGeneratorFactory::fromArray([
                        'longdescription' => $property->getMeta()->docs()->unwrapOr(''),
                        'tags' => [
                            [
                                'name'        => 'var',
                                'description' => !$this->options->useNillable() ? str_replace('null | ', '',$property->getDocBlockType()) : $property->getDocBlockType(),
                            ],
                        ]
                    ])
                );
            }

            if ($this->options->useTypeHints()) {
                $propertyGenerator->setType(TypeGenerator::fromTypeString($property->getPhpType()));
                if(!$this->options->useNillable()){
                    $propertyGenerator->setType(TypeGenerator::fromTypeString(str_replace('?', '', $property->getPhpType())));
                }

                if ($this->options->useOptionalValue() && (string) $propertyGenerator->getType() === 'string') {
                    $propertyGenerator->omitDefaultValue(false);
                    $propertyGenerator->setDefaultValue('');
                }
            }

            $class->addPropertyFromGenerator($propertyGenerator);
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }
}
