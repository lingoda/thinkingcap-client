<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Tests;

use Lingoda\ThinkingcapBundle\LingodaThinkingcapBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\Kernel;

final class TestKernel extends Kernel
{
    /**
     * @return array<Bundle>
     */
    public function registerBundles(): array
    {
        return [
            new FrameworkBundle(),
            new LingodaThinkingcapBundle(), // Test this Bundle
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__ . '/config/config.yaml');
        $loader->load(__DIR__ . '/config/services.yaml');
    }
}
