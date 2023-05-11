<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Client;

use Lingoda\ThinkingcapBundle\WebService\CourseManagement\CourseManagementClassmap;
use Lingoda\ThinkingcapBundle\WebService\CourseManagement\CourseManagementSoapClient;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class CourseClientFactory
{
    public static function create(
        string $wsdlUrl,
        EventDispatcherInterface $eventDispatcher
    ): CourseManagementSoapClient {
        $soapOption = ExtSoapOptions::defaults($wsdlUrl, [])
            ->withClassMap(CourseManagementClassmap::getCollection())
        ;

        return new CourseManagementSoapClient(
            ExtSoapEngineFactory::fromOptions($soapOption),
            $eventDispatcher
        );
    }
}
