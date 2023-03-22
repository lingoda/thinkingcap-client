<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Tests\Client;

use Lingoda\ThinkingcapBundle\Client\RequestFactory;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmail;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use VCR\VCR;

final class LearnerClientTest extends KernelTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
    }

    /**
     * @vcr get-user-by-email
     */
    public function testCallLearnerManagementMethod(): void
    {
        VCR::insertCassette('get-user-by-email');

        /** @var LearnerManagementSoapClient $client */
        $client = self::$container->get(LearnerManagementSoapClient::class);

        $getUserByEmailType = RequestFactory::create(
            'test2',
            GetUserByEmail::class,
            'testEmail@lingoda.com',
            false
        );

        $response = $client->getUserByEmail($getUserByEmailType);

        self::assertTrue($response->getGetUserByEmailResult()->getSuccess());
    }
}
