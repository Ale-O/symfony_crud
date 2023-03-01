<?php

namespace ContainerQgPPviy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FXjGl5FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FXjGl5F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FXjGl5F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'helper' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'helper' => '?',
            'security' => '?',
        ]);
    }
}
