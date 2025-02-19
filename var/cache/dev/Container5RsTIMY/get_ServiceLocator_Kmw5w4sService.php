<?php

namespace Container5RsTIMY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kmw5w4sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kmw5w4s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kmw5w4s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'exerciceRepository' => ['privates', 'App\\Repository\\ExerciceRepository', 'getExerciceRepositoryService', true],
        ], [
            'exerciceRepository' => 'App\\Repository\\ExerciceRepository',
        ]);
    }
}
