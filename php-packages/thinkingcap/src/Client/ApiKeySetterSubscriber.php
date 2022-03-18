<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Client;

use Phpro\SoapClient\Event\RequestEvent;
use Phpro\SoapClient\Events;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Webmozart\Assert\Assert;

class ApiKeySetterSubscriber implements EventSubscriberInterface
{
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function onClientRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();

        Assert::methodExists($request, 'getApiKey');
        if ($request->getApiKey() !== RequestFactory::API_KEY_PLACEHOLDER) {
            return;
        }

        Assert::methodExists($request, 'withApiKey');
        $request = $request->withApiKey($this->apiKey);
        $event->registerRequest($request);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            Events::REQUEST => 'onClientRequest',
        ];
    }
}
