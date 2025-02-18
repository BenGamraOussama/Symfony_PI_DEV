<?php

namespace Container1WxlDNm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P2wjrvsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.p2wjrvs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.p2wjrvs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'consultation' => ['privates', '.errored.CRNCACW', NULL, 'Cannot determine controller argument for "App\\Controller\\ConsultationController::delete()": the $consultation argument is type-hinted with the non-existent class or interface: "App\\Entity\\Consultation".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'consultation' => '?',
            'entityManager' => '?',
        ]);
    }
}
