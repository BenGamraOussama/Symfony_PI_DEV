<?php

namespace ContainerMVCWRDI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FM7hU_LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FM7hU.l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FM7hU.l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'patient' => ['privates', '.errored..service_locator.FM7hU.l.App\\Entity\\Patient', NULL, 'Cannot autowire service ".service_locator.FM7hU.l": it needs an instance of "App\\Entity\\Patient" but this type has been excluded in "config/services.yaml".'],
        ], [
            'patient' => 'App\\Entity\\Patient',
        ]);
    }
}
