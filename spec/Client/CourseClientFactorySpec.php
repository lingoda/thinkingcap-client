<?php

declare(strict_types = 1);

namespace spec\Lingoda\ThinkingcapBundle\Client;

use Lingoda\ThinkingcapBundle\Client\ApiKeySetterSubscriber;
use Lingoda\ThinkingcapBundle\WebService\CourseManagement\CourseManagementSoapClient;
use PhpSpec\ObjectBehavior;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class CourseClientFactorySpec extends ObjectBehavior
{
    function it_can_create_course_management_client(
        EventDispatcherInterface $eventDispatcher,
        ApiKeySetterSubscriber $apiKeySetterSubscriber
    ) {
        $this->beConstructedThrough(
            'create',
            [
                'https://www.lingoda.care/WebService/CourseManagement.asmx?WSDL',
                $eventDispatcher,
                $apiKeySetterSubscriber,
            ]
        );

        $this->shouldBeAnInstanceOf(CourseManagementSoapClient::class);
    }
}
