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
        'src/WebService/CourseManagement/CourseManagement.wsdl',
        new FlatteningLoader(new StreamWrapperLoader())
    ))
    ->setTypeDestination('src/WebService/CourseManagement/Type')
    ->setTypeNamespace('Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type')
    ->setClientDestination('src/WebService/CourseManagement')
    ->setClientName('CourseManagementSoapClient')
    ->setClientNamespace('Lingoda\ThinkingcapBundle\WebService\CourseManagement')
    ->setClassMapDestination('src/WebService/CourseManagement')
    ->setClassMapName('CourseManagementClassmap')
    ->setClassMapNamespace('Lingoda\ThinkingcapBundle\WebService\CourseManagement')
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
    // add ResultInterface to any result class type
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
    // Ignore nillable properties for Result and Message in ServiceResultOfString class
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
            '/^(ServiceResultOfString|ServiceResultOfListOfLearningActivityRecord)$/'
        )
    )
    // Properties Tags, Sessions, CourseSession in LearningActivity and ArrayOfCourseSession class are optional with default value
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\PropertynameMatchesRule(
                new Rules\AssembleRule(new Assembler\PropertyAssembler(
                    (new Assembler\PropertyAssemblerOptions())
                        ->withOptionalValue()
                )),
                '/^(Tags|Sessions|CourseSession)$/'
            ),
            '/^(LearningActivity|ArrayOfCourseSession)$/'
        )
    )
    // ID, Type, Code, Language, Title, Description are protected and not null
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\PropertynameMatchesRule(
                new Rules\MultiRule([
                    new Rules\AssembleRule(new CustomAssembler\PropertyAssembler(
                        (new CustomAssembler\PropertyAssemblerOptions())
                            ->withNillable()
                            ->withVisibility(PropertyGenerator::VISIBILITY_PROTECTED)
                            ->withDocBlocks(false)
                    )),
                    new Rules\AssembleRule(new CustomAssembler\GetterAssembler((new CustomAssembler\GetterAssemblerOptions())->withNillable()->withDocBlocks(false))),
                    new Rules\AssembleRule(new CustomAssembler\ImmutableSetterAssembler((new CustomAssembler\ImmutableSetterAssemblerOptions())->withNillable()->withDocBlocks(false))),
                ]),
                '/^(ID|Type|Code|Language|Title|Description)$/'
            ),
            '/^(LearningActivity)$/'
        )
    )
    /**
     * Not nullable properties
     * Match -> ServiceResultOfString, ServiceResultOf*, *Response$, ^ServiceUser$
     * Properties -> *Result$, ^UserID$, ^Email$
     */
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
                ]),
                '/Result$/'
            ),
            '/^(?!ServiceResultOfString)(ServiceResultOf)|(Response$)/'
        )
    )
;
