<?php

namespace Container1ywpD9q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Div2LH8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.div2LH8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.div2LH8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'filefields' => ['privates', '.errored..service_locator.div2LH8.App\\Entity\\FileFields', NULL, 'Cannot autowire service ".service_locator.div2LH8": it references class "App\\Entity\\FileFields" but no such service exists.'],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'filefields' => 'App\\Entity\\FileFields',
            'slugger' => '?',
        ]);
    }
}
