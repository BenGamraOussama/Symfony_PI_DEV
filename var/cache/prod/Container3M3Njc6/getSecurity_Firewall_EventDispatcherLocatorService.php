<?php

namespace Container3M3Njc6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_EventDispatcherLocatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.firewall.event_dispatcher_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.firewall.event_dispatcher_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => #[\Closure(name: 'security.event_dispatcher.main', class: 'Symfony\\Component\\EventDispatcher\\EventDispatcher')] fn () => ($container->privates['security.event_dispatcher.main'] ?? self::getSecurity_EventDispatcher_MainService($container))]);
    }
}
