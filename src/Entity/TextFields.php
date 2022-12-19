<?php

namespace App\Entity;

use App\Repository\TextFieldsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TextFieldsRepository::class)
 */
class TextFields
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
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="textfields")
     * @ORM\JoinColumn(nullable=false)
     */
    private $element;

    /**
     * @var Subelement
     *
     * @ORM\ManyToOne(targetEntity="Subelement", inversedBy="textfields")
     * @ORM\JoinColumn(nullable=true)
     */
    private $subelement;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
