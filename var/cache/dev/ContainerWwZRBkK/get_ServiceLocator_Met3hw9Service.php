<?php

namespace ContainerWwZRBkK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Met3hw9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Met3hw9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Met3hw9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'element' => ['privates', '.errored..service_locator.Met3hw9.App\\Entity\\Element', NULL, 'Cannot autowire service ".service_locator.Met3hw9": it references class "App\\Entity\\Element" but no such service exists.'],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'doctrine' => '?',
            'element' => 'App\\Entity\\Element',
            'eventDispatcher' => '?',
        ]);
    }
}
