<?php

namespace ContainerQRXmkmn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UFJkjP8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uFJkjP8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uFJkjP8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'textfields' => ['privates', '.errored..service_locator.uFJkjP8.App\\Entity\\TextFields', NULL, 'Cannot autowire service ".service_locator.uFJkjP8": it references class "App\\Entity\\TextFields" but no such service exists.'],
        ], [
            'textfields' => 'App\\Entity\\TextFields',
        ]);
    }
}
