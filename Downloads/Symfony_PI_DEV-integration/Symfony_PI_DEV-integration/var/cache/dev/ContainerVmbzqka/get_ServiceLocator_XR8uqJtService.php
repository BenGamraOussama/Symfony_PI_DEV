<?php

namespace ContainerVmbzqka;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XR8uqJtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XR8uqJt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XR8uqJt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'fournisseurRepository' => ['privates', '.errored.VOJFHnp', NULL, 'Cannot determine controller argument for "App\\Controller\\AdminController::listFournisseur()": the $fournisseurRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\FournisseurRepository".'],
        ], [
            'fournisseurRepository' => '?',
        ]);
    }
}
