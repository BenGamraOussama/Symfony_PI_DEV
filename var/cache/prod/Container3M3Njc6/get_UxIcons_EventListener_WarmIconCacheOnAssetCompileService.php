<?php

namespace Container3M3Njc6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_EventListener_WarmIconCacheOnAssetCompileService extends App_KernelProdContainer
{
    /*
     * Gets the private '.ux_icons.event_listener.warm_icon_cache_on_asset_compile' shared service.
     *
     * @return \Symfony\UX\Icons\EventListener\WarmIconCacheOnAssetCompileListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.ux_icons.cache_warmer'] ?? $container->load('get_UxIcons_CacheWarmerService'));

        if (isset($container->privates['.ux_icons.event_listener.warm_icon_cache_on_asset_compile'])) {
            return $container->privates['.ux_icons.event_listener.warm_icon_cache_on_asset_compile'];
        }

        return $container->privates['.ux_icons.event_listener.warm_icon_cache_on_asset_compile'] = new \Symfony\UX\Icons\EventListener\WarmIconCacheOnAssetCompileListener($a);
    }
}
