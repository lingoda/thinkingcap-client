<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Tests\Client;

use Lingoda\ThinkingcapBundle\Client\RequestFactory;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementClassmap;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmail;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfServiceUser;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\CodeGeneratorEngineFactory;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\Metadata\MetadataOptions;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Wsdl\Loader\FlatteningLoader;
use Soap\Wsdl\Loader\StreamWrapperLoader;
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
            ExtSoapOptions::defaults(__DIR__ . '/../../src/WebService/LearnerManagement/LearnerManagement.wsdl')
                ->withClassMap(LearnerManagementClassmap::getCollection())
        );

        /** @var EventDispatcherInterface $eventDispatcher */
        $eventDispatcher = self::getContainer()->get(EventDispatcherInterface::class);
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);
        $this->client = new LearnerManagementSoapClient($caller);
    }

    public function testCallLearnerManagementMethod(): void
    {
        $getUserByEmailType = RequestFactory::create(
            'test2',
            GetUserByEmail::class,
            'testEmail@lingoda.com',
            false,
            false
        );

        $response = $this->client->getUserByEmail($getUserByEmailType);
        $userByEmailResult = $response->getGetUserByEmailResult();

        self::assertFalse($userByEmailResult->getSuccess());
    }
}
