<?php

namespace Container3M3Njc6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/admin')]), ['ROLE_SUPER_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/client')]), ['ROLE_CLIENT'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/fermier')]), ['ROLE_FERMIER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/fournissur')]), ['ROLE_FOURNISSEUR'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/employee')]), ['ROLE_Employee'], NULL);

        return $instance;
    }
}
