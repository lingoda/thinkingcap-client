<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Client;

use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementClassmap;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class LearnerClientFactory
{
    public static function create(
        string $wsdlUrl,
        EventDispatcherInterface $eventDispatcher
    ): LearnerManagementSoapClient {
        $soapOption = ExtSoapOptions::defaults($wsdlUrl, [])
            ->withClassMap(LearnerManagementClassmap::getCollection())
        ;

        return new LearnerManagementSoapClient(
            ExtSoapEngineFactory::fromOptions($soapOption),
            $eventDispatcher
        );
    }
}
