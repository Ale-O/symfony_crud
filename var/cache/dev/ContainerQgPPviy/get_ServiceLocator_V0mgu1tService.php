<?php

namespace ContainerQgPPviy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V0mgu1tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V0mgu1t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V0mgu1t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'elements' => ['privates', 'App\\Repository\\ElementRepository', 'getElementRepositoryService', true],
            'subelements' => ['privates', 'App\\Repository\\SubelementRepository', 'getSubelementRepositoryService', true],
            'tags' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
        ], [
            'elements' => 'App\\Repository\\ElementRepository',
            'subelements' => 'App\\Repository\\SubelementRepository',
            'tags' => 'App\\Repository\\TagRepository',
        ]);
    }
}
