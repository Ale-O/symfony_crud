<?php

namespace ContainerGzxxhGX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KR88F0PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kR88F0P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kR88F0P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tags' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
        ], [
            'tags' => 'App\\Repository\\TagRepository',
        ]);
    }
}
