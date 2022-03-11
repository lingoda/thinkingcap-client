<?php

declare(strict_types = 1);

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('src/WebService/CourseManagement/CourseManagement.wsdl', [])
            ->disableWsdlCache()
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
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
;
