<?php

namespace ContainerQgPPviy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\TagsController' shared autowired service.
     *
     * @return \App\Controller\Admin\TagsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'TagsController.php';

        $container->services['App\\Controller\\Admin\\TagsController'] = $instance = new \App\Controller\Admin\TagsController();

        $instance->setContainer(($container->privates['.service_locator..1lrpk9'] ?? $container->load('get_ServiceLocator__1lrpk9Service'))->withContext('App\\Controller\\Admin\\TagsController', $container));

        return $instance;
    }
}
