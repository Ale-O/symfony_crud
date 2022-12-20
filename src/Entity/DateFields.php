<?php

namespace App\Entity;

use App\Repository\DateFieldsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DateFieldsRepository::class)
 */
class DateFields
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Element
     *
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="datefields")
     * @ORM\JoinColumn(nullable=false)
     */
    private $element;

    /**
     * @var Subelement
     *
     * @ORM\ManyToOne(targetEntity="Subelement", inversedBy="datefields")
     * @ORM\JoinColumn(nullable=true)
     */
    private $subelement;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getElement(): ?Element
    {
        return $this->element;
    }

    public function setElement(Element $element): self
    {
        $this->element = $element;

        return $this;
    }

    public function getSubelement(): ?Subelement
    {
        return $this->subelement;
    }

    public function setSubelement(?Subelement $subelement): self
    {
        $this->subelement = $subelement;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): \DateTime
    {
        return $this->content;
    }

    public function setContent(\DateTime $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }
}
