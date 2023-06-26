<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Client;

use Phpro\SoapClient\Event\RequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Webmozart\Assert\Assert;

class ApiKeySetterSubscriber implements EventSubscriberInterface
{
    /**
     * @param string[] $apiKeys
     */
    public function __construct(
        private readonly array $apiKeys
    ) {
    }

    public function onClientRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();

        Assert::methodExists($request, 'getApiKey');

        $apiName = $this->getApiDomain($request->getApiKey());
        if (!$apiName) {
            return;
        }

        Assert::methodExists($request, 'withApiKey');
        $request = $request->withApiKey($this->getKeyForDomain($apiName));
        $event->registerRequest($request);
    }

    private function getKeyForDomain(string $domain): string
    {
        if (!isset($this->apiKeys[$domain])) {
            throw new \InvalidArgumentException(sprintf('Domain "%s" has no API key configured', $domain));
        }

        return $this->apiKeys[$domain];
    }

    private function getApiDomain(string $value): ?string
    {
        $result = sscanf($value, RequestFactory::API_KEY_PLACEHOLDER);

        if (empty($result) || empty($result[0])) {
            return null;
        }

        return $result[0];
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            RequestEvent::class => 'onClientRequest',
        ];
    }
}
