<?php

namespace ContainerXNwjIjK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CZ2Ga9KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cZ2Ga9K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cZ2Ga9K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'datefields' => ['privates', '.errored..service_locator.cZ2Ga9K.App\\Entity\\DateFields', NULL, 'Cannot autowire service ".service_locator.cZ2Ga9K": it references class "App\\Entity\\DateFields" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'datefields' => 'App\\Entity\\DateFields',
            'doctrine' => '?',
        ]);
    }
}
