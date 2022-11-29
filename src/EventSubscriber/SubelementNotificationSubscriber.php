<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\EventSubscriber;

use App\Entity\Subelement;
use App\Event\SubelementCreatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Notifies element's author about new subelements.
 *
 * @author Oleg Voronkovich <oleg-voronkovich@yandex.ru>
 */
class SubelementNotificationSubscriber implements EventSubscriberInterface
{
    private $mailer;
    private $translator;
    private $urlGenerator;
    private $sender;

    public function __construct(MailerInterface $mailer, UrlGeneratorInterface $urlGenerator, TranslatorInterface $translator, string $sender)
    {
        $this->mailer = $mailer;
        $this->urlGenerator = $urlGenerator;
        $this->translator = $translator;
        $this->sender = $sender;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SubelementCreatedEvent::class => 'onSubelementCreated',
        ];
    }

    public function onSubelementCreated(SubelementCreatedEvent $event): void
    {
        /** @var Subelement $subelement */
        $subelement = $event->getSubelement();
        $element = $subelement->getElement();

        $linkToElement = $this->urlGenerator->generate('crud_element', [
            'slug' => $element->getSlug(),
            '_fragment' => 'subelement_'.$subelement->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        $subject = $this->translator->trans('notification.subelement_created');
        $body = $this->translator->trans('notification.subelement_created.description', [
            '%title%' => $element->getTitle(),
            '%link%' => $linkToElement,
        ]);

        // See https://symfony.com/doc/current/mailer.html
        $email = (new Email())
            ->from($this->sender)
            ->to($element->getAuthor()->getEmail())
            ->subject($subject)
            ->html($body)
        ;

        // In config/packages/dev/mailer.yaml the delivery of messages is disabled.
        // That's why in the development environment you won't actually receive any email.
        // However, you can inspect the contents of those unsent emails using the debug toolbar.
        $this->mailer->send($email);
    }
}
