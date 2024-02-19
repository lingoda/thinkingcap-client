<?php

declare(strict_types=1);

use Laminas\Code\Generator\PropertyGenerator;
use Lingoda\ThinkingcapBundle\Resources\Assembler as CustomAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\CodeGeneratorEngineFactory;
use Soap\Wsdl\Loader\FlatteningLoader;
use Soap\Wsdl\Loader\StreamWrapperLoader;

return Config::create()
    ->setEngine($engine = CodeGeneratorEngineFactory::create(
        'src/WebService/LearnerManagement/LearnerManagement.wsdl',
        new FlatteningLoader(new StreamWrapperLoader())
    ))
    ->setTypeDestination('src/WebService/LearnerManagement/Type')
    ->setTypeNamespace('Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type')
    ->setClientDestination('src/WebService/LearnerManagement')
    ->setClientName('LearnerManagementSoapClient')
    ->setClientNamespace('Lingoda\ThinkingcapBundle\WebService\LearnerManagement')
    ->setClassMapDestination('src/WebService/LearnerManagement')
    ->setClassMapName('LearnerManagementClassmap')
    ->setClassMapNamespace('Lingoda\ThinkingcapBundle\WebService\LearnerManagement')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsExtendingTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler())
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\PropertynameMatchesRule(
                new Rules\MultiRule([
                    new Rules\AssembleRule(new CustomAssembler\PropertyAssembler(
                        (new CustomAssembler\PropertyAssemblerOptions())
                            ->withNillable()
                            ->withVisibility(PropertyGenerator::VISIBILITY_PROTECTED)
                            ->withOptionalValue()
                    )),
                    new Rules\AssembleRule(new CustomAssembler\GetterAssembler((new CustomAssembler\GetterAssemblerOptions())->withNillable()->withDocBlocks(false))),
                    new Rules\AssembleRule(new CustomAssembler\ImmutableSetterAssembler((new CustomAssembler\ImmutableSetterAssemblerOptions())->withNillable()->withDocBlocks(false))),
                ]),
                '/^(Result|Message)$/'
            ),
            '/^(ServiceResultOfString)$/'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\PropertyAssembler((new Assembler\PropertyAssemblerOptions())->withVisibility(PropertyGenerator::VISIBILITY_PROTECTED))),
            ]),
            '/^ServiceUser$/'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\PropertynameMatchesRule(
                new Rules\AssembleRule(new Assembler\PropertyAssembler(
                    (new Assembler\PropertyAssemblerOptions())
                        ->withOptionalValue()
                )),
                '/^(Title|ScreenName|Language)$/'
            ),
            '/ServiceUser$/'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\PropertynameMatchesRule(
                new Rules\MultiRule([
                    new Rules\AssembleRule(new CustomAssembler\PropertyAssembler(
                        (new CustomAssembler\PropertyAssemblerOptions())
                            ->withNillable()
                            ->withDocBlocks(false)
                    )),
                    new Rules\AssembleRule(new CustomAssembler\GetterAssembler((new CustomAssembler\GetterAssemblerOptions())->withNillable()->withDocBlocks(false))),
                    new Rules\AssembleRule(new CustomAssembler\ImmutableSetterAssembler((new CustomAssembler\ImmutableSetterAssemblerOptions())->withNillable()->withDocBlocks(false))),
                    new Rules\PropertynameMatchesRule(
                        new Rules\AssembleRule(new CustomAssembler\PropertyAssembler(
                            (new CustomAssembler\PropertyAssemblerOptions())
                                ->withNillable()
                                ->withVisibility(PropertyGenerator::VISIBILITY_PROTECTED)
                                ->withDocBlocks(false)
                        )),
                        '/^(UserID|Email)$/'
                    ),
                ]),
                '/(Result$)|^(UserID|Email)$/'
            ),
            '/^(?!ServiceResultOfString)(ServiceResultOf)|(Response$)|(^ServiceUser$)/'
        )
    )
;
