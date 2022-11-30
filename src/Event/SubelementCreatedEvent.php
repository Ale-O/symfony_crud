<?php

namespace App\Event;

use App\Entity\Subelement;
use Symfony\Contracts\EventDispatcher\Event;

class SubelementCreatedEvent extends Event
{
    protected $subelement;

    public function __construct(Subelement $subelement)
    {
        $this->subelement = $subelement;
    }

    public function getSubelement(): Subelement
    {
        return $this->subelement;
    }
}
