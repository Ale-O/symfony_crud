<?php

namespace ContainerQgPPviy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\FieldsController' shared autowired service.
     *
     * @return \App\Controller\Admin\FieldsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'FieldsController.php';

        $container->services['App\\Controller\\Admin\\FieldsController'] = $instance = new \App\Controller\Admin\FieldsController();

        $instance->setContainer(($container->privates['.service_locator..1lrpk9'] ?? $container->load('get_ServiceLocator__1lrpk9Service'))->withContext('App\\Controller\\Admin\\FieldsController', $container));

        return $instance;
    }
}
