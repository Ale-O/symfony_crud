<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
