<?php

namespace Container1ywpD9q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckRequirementsSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\CheckRequirementsSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\CheckRequirementsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'CheckRequirementsSubscriber.php';

        return $container->privates['App\\EventSubscriber\\CheckRequirementsSubscriber'] = new \App\EventSubscriber\CheckRequirementsSubscriber(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
