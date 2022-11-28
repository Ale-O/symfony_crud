<?php

namespace ContainerCxnrSKP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubelementNotificationSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\SubelementNotificationSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\SubelementNotificationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'SubelementNotificationSubscriber.php';

        return $container->privates['App\\EventSubscriber\\SubelementNotificationSubscriber'] = new \App\EventSubscriber\SubelementNotificationSubscriber(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['router'] ?? $container->getRouterService()), ($container->services['translator'] ?? $container->getTranslatorService()), 'anonymous@example.com');
    }
}
