<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Tests\Client;

use Lingoda\ThinkingcapBundle\Client\ApiKeySetterSubscriber;
use Lingoda\ThinkingcapBundle\Client\RequestFactory;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmail;
use Phpro\SoapClient\Event\RequestEvent;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class ApiKeySetterSubscriberTest extends KernelTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
    }

    public function testForNonExistingDomain(): void
    {
        $client = $this->getMockBuilder(LearnerManagementSoapClient::class)
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $getUserByEmailType = RequestFactory::create(
            'Szczebrzeszyn',
            GetUserByEmail::class,
            'testEmail@lingoda.com'
        );

        $event = new RequestEvent($client, 'getUserByEmail', $getUserByEmailType);

        self::expectException(\InvalidArgumentException::class);

        /** @var ApiKeySetterSubscriber $subscriber */
        $subscriber = self::$container->get(ApiKeySetterSubscriber::class);
        $subscriber->onClientRequest($event);
    }

    public function testSetApiKeyOnClientRequest(): void
    {
        $client = $this->getMockBuilder(LearnerManagementSoapClient::class)
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $getUserByEmailType = RequestFactory::create(
            'test2',
            GetUserByEmail::class,
            'testEmail@lingoda.com'
        );

        $event = new RequestEvent($client, 'getUserByEmail', $getUserByEmailType);

        /** @var GetUserByEmail $request */
        $request = $event->getRequest();
        self::assertEquals(sprintf(RequestFactory::API_KEY_PLACEHOLDER, 'test2'), $request->getApiKey());

        /** @var ApiKeySetterSubscriber $subscriber */
        $subscriber = self::$container->get(ApiKeySetterSubscriber::class);
        $subscriber->onClientRequest($event);

        /** @var GetUserByEmail $request */
        $request = $event->getRequest();
        self::assertEquals('z6kl2fvfqsor4x2sq5hu', $request->getApiKey());
    }
}
