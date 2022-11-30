<?php

namespace App\EventSubscriber;

use App\Entity\Subelement;
use App\Event\SubelementCreatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

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

        $email = (new Email())
            ->from($this->sender)
            ->to($element->getAuthor()->getEmail())
            ->subject($subject)
            ->html($body)
        ;

        $this->mailer->send($email);
    }
}
