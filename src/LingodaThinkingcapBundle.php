<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle;

use Lingoda\ThinkingcapBundle\DependencyInjection\Compiler\EventDispatcherCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Thinkingcap integration bundle
 */
class LingodaThinkingcapBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new EventDispatcherCompilerPass());
    }
}
