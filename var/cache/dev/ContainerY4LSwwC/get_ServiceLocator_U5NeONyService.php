<?php

namespace ContainerY4LSwwC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U5NeONyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u5NeONy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u5NeONy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Eleve' => ['privates', '.errored..service_locator.u5NeONy.App\\Entity\\Eleve', NULL, 'Cannot autowire service ".service_locator.u5NeONy": it references class "App\\Entity\\Eleve" but no such service exists.'],
        ], [
            'Eleve' => 'App\\Entity\\Eleve',
        ]);
    }
}
