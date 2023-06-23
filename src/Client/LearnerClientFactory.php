<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Client;

use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementClassmap;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class LearnerClientFactory
{
    public static function create(
        string $wsdlUrl,
        EventDispatcherInterface $eventDispatcher
    ): LearnerManagementSoapClient {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdlUrl, [])
                ->withClassMap(LearnerManagementClassmap::getCollection())
        );

        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new LearnerManagementSoapClient($caller);
    }
}