<?php

namespace ContainerMVCWRDI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPatient3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.nHVKLtO.App\Entity\Patient' shared service.
     *
     * @return \App\Entity\Patient
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.nHVKLtO": it needs an instance of "App\\Entity\\Patient" but this type has been excluded in "config/services.yaml".');
    }
}
