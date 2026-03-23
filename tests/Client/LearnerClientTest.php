<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Tests\Client;

use Lingoda\ThinkingcapBundle\Client\RequestFactory;
use Lingoda\ThinkingcapBundle\Tests\Transport\FixtureTransport;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementClassmap;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmail;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

final class LearnerClientTest extends KernelTestCase
{
    private LearnerManagementSoapClient $client;

    protected function setUp(): void
    {
        parent::setUp();
        self::bootKernel();

        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults(__DIR__ . '/../../src/WebService/LearnerManagement/LearnerManagement.wsdl')
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(LearnerManagementClassmap::types())
                        ->addBackedEnumClassMapCollection(LearnerManagementClassmap::enums())
                )
                ->withTransport(new FixtureTransport(__DIR__ . '/../fixtures/soap'))
        );

        /** @var EventDispatcherInterface $eventDispatcher */
        $eventDispatcher = self::getContainer()->get(EventDispatcherInterface::class);
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);
        $this->client = new LearnerManagementSoapClient($caller);
    }

    protected function tearDown(): void
    {
        self::ensureKernelShutdown();
        parent::tearDown();
    }

    public function testGetUserByEmailReturnsFailedResult(): void
    {
        $getUserByEmailType = RequestFactory::create(
            'test2',
            GetUserByEmail::class,
            'testEmail@lingoda.com',
            false,
            false
        );

        $response = $this->client->getUserByEmail($getUserByEmailType);
        $result = $response->getGetUserByEmailResult();
        self::assertNotNull($result);

        self::assertFalse($result->getSuccess());
        self::assertNull($result->getResult());
        self::assertSame('Invalid API key.', $result->getMessage());
    }
}
