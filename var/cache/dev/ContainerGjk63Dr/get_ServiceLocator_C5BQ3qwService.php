<?php

namespace ContainerGjk63Dr;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C5BQ3qwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c5BQ3qw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c5BQ3qw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'element' => ['privates', '.errored..service_locator.c5BQ3qw.App\\Entity\\Element', NULL, 'Cannot autowire service ".service_locator.c5BQ3qw": it references class "App\\Entity\\Element" but no such service exists.'],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'element' => 'App\\Entity\\Element',
            'eventDispatcher' => '?',
        ]);
    }
}
