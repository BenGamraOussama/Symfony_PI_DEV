<?php

namespace Container1WxlDNm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BMqRrkBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BMqRrkB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BMqRrkB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'patient' => ['privates', '.errored..service_locator.BMqRrkB.App\\Entity\\Patient', NULL, 'Cannot autowire service ".service_locator.BMqRrkB": it needs an instance of "App\\Entity\\Patient" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'patient' => 'App\\Entity\\Patient',
        ]);
    }
}
