<?php

declare(strict_types=1);

use Lingoda\ThinkingcapBundle\Resources\Assembler as CustomAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Wsdl\Loader\FlatteningLoader;
use Soap\Wsdl\Loader\StreamWrapperLoader;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        EngineOptions::defaults('src/WebService/CourseManagement/CourseManagement.wsdl')
            ->withWsdlLoader(new FlatteningLoader(new StreamWrapperLoader()))
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
    // Must come after GetterAssembler: adds ensure*() for the nullable getters selected below
    ->addRule(new Rules\AssembleRule(new CustomAssembler\EnsureGetterAssembler(
        CustomAssembler\EnsureGetterAssemblerOptions::create()
            ->forResponseWrappers()
            ->forServiceResults()
            ->forProperties([
                'LearningActivity' => ['ID', 'Type', 'Code', 'Language'],
                'CourseSeries' => ['SeriesCode'],
                'CourseSession' => ['SessionID'],
            ])
    )))
;
