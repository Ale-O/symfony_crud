<?php

namespace ContainerLO41BWs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CbsAoJ_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CbsAoJ.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CbsAoJ.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comment' => ['privates', '.errored..service_locator.CbsAoJ..App\\Entity\\Comment', NULL, 'Cannot autowire service ".service_locator.CbsAoJ.": it references class "App\\Entity\\Comment" but no such service exists.'],
        ], [
            'comment' => 'App\\Entity\\Comment',
        ]);
    }
}
