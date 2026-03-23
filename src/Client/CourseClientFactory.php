<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Client;

use Lingoda\ThinkingcapBundle\WebService\CourseManagement\CourseManagementClassmap;
use Lingoda\ThinkingcapBundle\WebService\CourseManagement\CourseManagementSoapClient;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class CourseClientFactory
{
    public static function create(
        string $wsdlUrl,
        EventDispatcherInterface $eventDispatcher
    ): CourseManagementSoapClient {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdlUrl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(CourseManagementClassmap::types())
                        ->addBackedEnumClassMapCollection(CourseManagementClassmap::enums())
                )
        );

        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new CourseManagementSoapClient($caller);
    }
}
