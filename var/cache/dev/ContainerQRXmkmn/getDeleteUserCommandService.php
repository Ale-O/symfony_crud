<?php

namespace ContainerQRXmkmn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteUserCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\DeleteUserCommand' shared autowired service.
     *
     * @return \App\Command\DeleteUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DeleteUserCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Utils'.\DIRECTORY_SEPARATOR.'Validator.php';

        $container->privates['App\\Command\\DeleteUserCommand'] = $instance = new \App\Command\DeleteUserCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Utils\\Validator'] ?? ($container->privates['App\\Utils\\Validator'] = new \App\Utils\Validator())), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setName('app:delete-user');

        return $instance;
    }
}
