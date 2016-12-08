<?php

namespace LexikTranslationSonataBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class LexikTranslationSonataExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('lexik_translation_sonata.auto_discover', $config['auto_discover']);
        $container->setParameter('lexik_translation_sonata.auto_discover_domains', $config['auto_discover_domains']);
    }
}
