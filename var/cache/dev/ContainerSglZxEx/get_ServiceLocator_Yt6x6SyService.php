<?php

namespace ContainerSglZxEx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yt6x6SyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yt6x6Sy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yt6x6Sy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tags' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
            'users' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'tags' => 'App\\Repository\\TagRepository',
            'users' => 'App\\Repository\\UserRepository',
        ]);
    }
}
