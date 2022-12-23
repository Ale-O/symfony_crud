<?php

namespace App\Entity;

use App\Repository\FileFieldsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FileFieldsRepository::class)
 */
class FileFields
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Element::class, inversedBy="fileFields")
     */
    private $element;

    /**
     * @ORM\ManyToOne(targetEntity=Subelement::class, inversedBy="fileFields")
     */
    private $subelement;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity=FileFields::class, inversedBy="childFields")
     * @ORM\JoinColumn(nullable=true)
     */
    private $parentFields;

    /**
     * @ORM\OneToMany(targetEntity=FileFields::class, mappedBy="parentFields")
     * @ORM\JoinColumn(nullable=true)
     */
    private $childFields;

    public function __construct()
    {
        $this->fileFields = new ArrayCollection();
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

    public function setElement(?Element $element): self
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
