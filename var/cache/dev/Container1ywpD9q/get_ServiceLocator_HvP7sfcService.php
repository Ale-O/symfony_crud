<?php

namespace Container1ywpD9q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HvP7sfcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hvP7sfc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hvP7sfc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'datefields' => ['privates', '.errored..service_locator.hvP7sfc.App\\Entity\\DateFields', NULL, 'Cannot autowire service ".service_locator.hvP7sfc": it references class "App\\Entity\\DateFields" but no such service exists.'],
        ], [
            'datefields' => 'App\\Entity\\DateFields',
        ]);
    }
}
