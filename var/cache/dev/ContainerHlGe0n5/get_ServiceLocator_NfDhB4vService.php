<?php

namespace ContainerHlGe0n5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NfDhB4vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nfDhB4v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nfDhB4v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'element' => ['privates', '.errored..service_locator.nfDhB4v.App\\Entity\\Element', NULL, 'Cannot autowire service ".service_locator.nfDhB4v": it references class "App\\Entity\\Element" but no such service exists.'],
        ], [
            'element' => 'App\\Entity\\Element',
        ]);
    }
}
