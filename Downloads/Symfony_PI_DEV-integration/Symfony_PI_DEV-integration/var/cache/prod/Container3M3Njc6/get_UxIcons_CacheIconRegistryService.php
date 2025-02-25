<?php

namespace Container3M3Njc6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_CacheIconRegistryService extends App_KernelProdContainer
{
    /*
     * Gets the private '.ux_icons.cache_icon_registry' shared service.
     *
     * @return \Symfony\UX\Icons\Registry\CacheIconRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.ux_icons.cache_icon_registry'] = new \Symfony\UX\Icons\Registry\CacheIconRegistry(new \Symfony\UX\Icons\Registry\ChainIconRegistry(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.ux_icons.local_svg_icon_registry'] ??= new \Symfony\UX\Icons\Registry\LocalSvgIconRegistry((\dirname(__DIR__, 4).'/assets/icons'), []));
            yield 1 => ($container->privates['.ux_icons.iconify_on_demand_registry'] ?? $container->load('get_UxIcons_IconifyOnDemandRegistryService'));
        }, 2)), ($container->privates['.ux_icons.cache'] ?? $container->load('get_UxIcons_CacheService')));
    }
}
