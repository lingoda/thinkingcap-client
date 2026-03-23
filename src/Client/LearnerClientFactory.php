<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Client;

use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementClassmap;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Webmozart\Assert\Assert;

class LearnerClientFactory
{
    public static function create(
        string $wsdlUrl,
        EventDispatcherInterface $eventDispatcher
    ): LearnerManagementSoapClient {
        Assert::stringNotEmpty($wsdlUrl, 'WSDL URL must not be empty');

        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdlUrl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(LearnerManagementClassmap::types())
                        ->addBackedEnumClassMapCollection(LearnerManagementClassmap::enums())
                )
        );

        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new LearnerManagementSoapClient($caller);
    }
}
