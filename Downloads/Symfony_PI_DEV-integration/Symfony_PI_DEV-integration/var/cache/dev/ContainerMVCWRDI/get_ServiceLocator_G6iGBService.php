<?php

namespace ContainerMVCWRDI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G6iGBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G_6iG_b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G_6iG_b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
            'patientRepository' => ['privates', 'App\\Repository\\PatientRepository', 'getPatientRepositoryService', true],
        ], [
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
            'patientRepository' => 'App\\Repository\\PatientRepository',
        ]);
    }
}
