<?php

namespace ContainerAGVG16W;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_25IZi3dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.25IZi3d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.25IZi3d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'subelement' => ['privates', '.errored..service_locator.25IZi3d.App\\Entity\\Subelement', NULL, 'Cannot autowire service ".service_locator.25IZi3d": it references class "App\\Entity\\Subelement" but no such service exists.'],
        ], [
            'subelement' => 'App\\Entity\\Subelement',
        ]);
    }
}
