<?php

declare(strict_types = 1);

namespace spec\Lingoda\ThinkingcapBundle\Client;

use Lingoda\ThinkingcapBundle\Client\ApiKeySetterSubscriber;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use PhpSpec\ObjectBehavior;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class LearnerClientFactorySpec extends ObjectBehavior
{
    function it_can_create_learner_management_client(
        EventDispatcherInterface $eventDispatcher,
        ApiKeySetterSubscriber $apiKeySetterSubscriber
    ) {
        $this->beConstructedThrough(
            'create',
            [
                'https://www.lingoda.care/WebService/LearnerManagement.asmx?WSDL',
                $eventDispatcher,
                $apiKeySetterSubscriber,
            ]
        );

        $this->shouldBeAnInstanceOf(LearnerManagementSoapClient::class);
    }
}
