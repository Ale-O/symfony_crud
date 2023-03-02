<?php

namespace App\Entity;

use App\Repository\SubelementFieldsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubelementFieldsRepository::class)
 */
class SubelementFields
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Element::class, inversedBy="subelementFields")
     */
    private $Element;

    /**
     * @ORM\ManyToOne(targetEntity=Subelement::class, inversedBy="subelementFields")
     */
    private $Subelement;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity=Subelement::class, inversedBy="selectInSubelementFields")
     * @ORM\JoinColumn(nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity=SubelementFields::class, inversedBy="childFields")
     */
    private $parentFields;

    /**
     * @ORM\OneToMany(targetEntity=SubelementFields::class, mappedBy="parentFields")
     */
    private $childFields;

    /**
     * @ORM\ManyToOne(targetEntity=Element::class, inversedBy="filterInSubelementFields")
     * @ORM\JoinColumn(nullable=false)
     */
    private $filter;

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
        return $this->Element;
    }

    public function setElement(?Element $Element): self
    {
        $this->Element = $Element;

        return $this;
    }

    public function getSubelement(): ?Subelement
    {
        return $this->Subelement;
    }

    public function setSubelement(?Subelement $Subelement): self
    {
        $this->Subelement = $Subelement;

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

    public function getContent(): ?Subelement
    {
        return $this->content;
    }

    public function setContent(?Subelement $content): self
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

    public function getFilter(): ?Element
    {
        return $this->filter;
    }

    public function setFilter(?Element $filter): self
    {
        $this->filter = $filter;

        return $this;
    }
}
