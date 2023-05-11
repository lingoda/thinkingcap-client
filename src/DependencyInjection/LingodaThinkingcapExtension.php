<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\DependencyInjection;

use Exception;
use RuntimeException;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class LingodaThinkingcapExtension extends ConfigurableExtension
{
    /**
     * @param array<mixed> $mergedConfig
     *
     * @throws Exception
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        if (!$this->getConfiguration($mergedConfig, $container)) {
            throw new RuntimeException('Missing Configuration class for Lingoda\\ThinkingcapBundle');
        }

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $container->setParameter(
            'lingoda.thinkingcap.api_keys',
            $mergedConfig['api_keys']
        );

        $container->setParameter(
            'lingoda.thinkingcap.wsdl_url.course_management',
            $mergedConfig['wsdl_urls']['course_management']
        );

        $container->setParameter(
            'lingoda.thinkingcap.wsdl_url.learner_management',
            $mergedConfig['wsdl_urls']['learner_management']
        );
    }
}
