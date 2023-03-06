<?php

namespace App\Entity;

use App\Repository\TextFieldsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TextFieldsRepository::class)
 */
class TextFields
{
    /**
     * @Groups("text_fields_info")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Element
     *
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="textfields")
     * @ORM\JoinColumn(nullable=true)
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
     * @Groups("text_fields_info")
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @Groups("text_fields_info")
     * @ORM\Column(type="string", length=255)
     * @ORM\JoinColumn(nullable=true)
     */
    private $content;

    /**
     * @Groups("text_fields_info")
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity=TextFields::class, inversedBy="childFields")
     * @ORM\JoinColumn(nullable=true)
     */
    private $parentFields;

    /**
     * @ORM\OneToMany(targetEntity=TextFields::class, mappedBy="parentFields")
     * @ORM\JoinColumn(nullable=true)
     */
    private $childFields;

    public function __construct()
    {
        $this->childFields = new ArrayCollection();
    }

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getParentFields(): ?self
    {
        return $this->parentFields;
    }

    public function setParentFields(?self $parentFields): self
    {
        $this->parentFields = $parentFields;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getChildFields(): Collection
    {
        return $this->childFields;
    }

    public function addChildField(self $childField): self
    {
        if (!$this->childFields->contains($childField)) {
            $this->childFields[] = $childField;
            $childField->setParentFields($this);
        }

        return $this;
    }

    public function removeChildField(self $childField): self
    {
        if ($this->childFields->removeElement($childField)) {
            // set the owning side to null (unless already changed)
            if ($childField->getParentFields() === $this) {
                $childField->setParentFields(null);
            }
        }

        return $this;
    }
}
