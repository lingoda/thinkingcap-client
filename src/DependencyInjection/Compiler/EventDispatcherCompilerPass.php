<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\DependencyInjection\Compiler;

use Lingoda\ThinkingcapBundle\Client\ApiKeySetterSubscriber;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class EventDispatcherCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (
            !$container->hasDefinition('event_dispatcher')
            || !$container->hasDefinition(ApiKeySetterSubscriber::class)
        ) {
            return;
        }

        $eventDispatcherDefinition = $container->getDefinition('event_dispatcher');
        $apiKeySetterSubscriberDefinition = $container->getDefinition(ApiKeySetterSubscriber::class);

        $eventDispatcherDefinition->addMethodCall('addSubscriber', [$apiKeySetterSubscriberDefinition]);
    }
}
