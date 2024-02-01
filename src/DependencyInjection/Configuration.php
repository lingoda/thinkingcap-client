<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('lingoda_thinkingcap');

        $treeBuilder->getRootNode()
            ->children()
            ->arrayNode('api_keys')
            ->requiresAtLeastOneElement()
            ->scalarPrototype()->end()
            ->end()
            ->arrayNode('wsdl_urls')
            ->children()
            ->scalarNode('course_management')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('learner_management')->isRequired()->cannotBeEmpty()->end()
            ->end()
            ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
