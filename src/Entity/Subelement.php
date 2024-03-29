<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use function Symfony\Component\String\u;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ApiResource(
 *      attributes={"security"="is_granted('ROLE_ADMIN')"},
 *      normalizationContext={"groups"={"subelement_info"}}
 * )
 * @ORM\Table(name="symfony_subelement")
 */
class Subelement
{
    /**
     * @var int
     *
     * @Groups("subelement_info")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Element
     *
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="subelements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $element;

    /**
     * @var string
     *
     * @Groups("subelement_info")
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="subelement.blank")
     * @Assert\Length(
     *     min=5,
     *     minMessage="too_short",
     *     max=10000,
     *     maxMessage="too_long"
     * )
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @Groups("subelement_info")
     * @ORM\Column(type="datetime")
     */
    private $publishedAt;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @Groups("subelement_info")
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @var TextFields[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="TextFields",
     *      mappedBy="subelement",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     * @ORM\OrderBy({"id": "DESC"})
     */
    private $textfields;

    /**
     * @var DateFields[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="DateFields",
     *      mappedBy="subelement",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     * @ORM\OrderBy({"id": "DESC"})
     */
    private $datefields;

    /**
     * @ORM\OneToMany(
     *      targetEntity=NumberFields::class,
     *      mappedBy="subelement",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     */
    private $numberFields;

    /**
     * @ORM\OneToMany(
     *      targetEntity=FileFields::class,
     *      mappedBy="subelement",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     */
    private $fileFields;

    /**
     * @ORM\OneToMany(
     *      targetEntity=SubelementFields::class,
     *      mappedBy="Subelement",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     */
    private $subelementFields;

    /**
     * @ORM\OneToMany(targetEntity=SubelementFields::class, mappedBy="content")
     */
    private $selectInSubelementFields;

    /**
     * @var Tag[]|Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", cascade={"persist"})
     * @ORM\JoinTable(name="symfony_subelement_tag")
     * @ORM\OrderBy({"name": "ASC"})
     * @Assert\Count(max="4", maxMessage="label.too_many_tags")
     */
    private $tags;

    public function __construct()
    {
        $this->publishedAt = new \DateTime();
        $this->textfields = new ArrayCollection();
        $this->datefields = new ArrayCollection();
        $this->numberFields = new ArrayCollection();
        $this->fileFields = new ArrayCollection();
        $this->subelementFields = new ArrayCollection();
        $this->selectInSubelementFields = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }

    /**
     * @Assert\IsTrue(message="subelement.is_spam")
     */
    public function isLegitSubelement(): bool
    {
        $containsInvalidCharacters = null !== u($this->content)->indexOf('@');

        return !$containsInvalidCharacters;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getPublishedAt(): \DateTime
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(\DateTime $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

    public function getElement(): ?Element
    {
        return $this->element;
    }

    public function setElement(Element $element): void
    {
        $this->element = $element;
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

    public function getTextFields(): Collection
    {
        return $this->textfields;
    }

    public function addTextField(TextFields $textfield): void
    {
        $textfield->setSubelement($this);
        if (!$this->textfields->contains($textfield)) {
            $this->textfields->add($textfield);
        }
    }

    public function removeTextField(TextFields $textfield): void
    {
        $this->textfield->removeSubelement($textfield);
    }

    public function getDateFields(): Collection
    {
        return $this->datefields;
    }

    public function addDateField(DateFields $datefield): void
    {
        $datefield->setSubelement($this);
        if (!$this->datefields->contains($datefield)) {
            $this->datefields->add($datefield);
        }
    }

    public function removeDateField(DateFields $datefield): void
    {
        $this->datefield->removeSubelement($datefield);
    }

    /**
     * @return Collection|NumberFields[]
     */
    public function getNumberFields(): Collection
    {
        return $this->numberFields;
    }

    public function addNumberField(NumberFields $numberField): self
    {
        if (!$this->numberFields->contains($numberField)) {
            $this->numberFields[] = $numberField;
            $numberField->setSubelement($this);
        }

        return $this;
    }

    public function removeNumberField(NumberFields $numberField): self
    {
        if ($this->numberFields->removeElement($numberField)) {
            // set the owning side to null (unless already changed)
            if ($numberField->getSubelement() === $this) {
                $numberField->setSubelement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|FileFields[]
     */
    public function getFileFields(): Collection
    {
        return $this->fileFields;
    }

    public function addFileField(FileFields $fileField): self
    {
        if (!$this->fileFields->contains($fileField)) {
            $this->fileFields[] = $fileField;
            $fileField->setSubelement($this);
        }

        return $this;
    }

    public function removeFileField(FileFields $fileField): self
    {
        if ($this->fileFields->removeElement($fileField)) {
            // set the owning side to null (unless already changed)
            if ($fileField->getSubelement() === $this) {
                $fileField->setSubelement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SubelementFields[]
     */
    public function getSubelementFields(): Collection
    {
        return $this->subelementFields;
    }

    public function addSubelementField(SubelementFields $subelementField): self
    {
        if (!$this->subelementFields->contains($subelementField)) {
            $this->subelementFields[] = $subelementField;
            $subelementField->setSubelement($this);
        }

        return $this;
    }

    public function removeSubelementField(SubelementFields $subelementField): self
    {
        if ($this->subelementFields->removeElement($subelementField)) {
            // set the owning side to null (unless already changed)
            if ($subelementField->getSubelement() === $this) {
                $subelementField->setSubelement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SubelementFields[]
     */
    public function getSelectInSubelementFields(): Collection
    {
        return $this->selectInSubelementFields;
    }

    public function addSelectInSubelementField(SubelementFields $selectInSubelementField): self
    {
        if (!$this->selectInSubelementFields->contains($selectInSubelementField)) {
            $this->selectInSubelementFields[] = $selectInSubelementField;
            $selectInSubelementField->setContent($this);
        }

        return $this;
    }

    public function removeSelectInSubelementField(SubelementFields $selectInSubelementField): self
    {
        if ($this->selectInSubelementFields->removeElement($selectInSubelementField)) {
            // set the owning side to null (unless already changed)
            if ($selectInSubelementField->getContent() === $this) {
                $selectInSubelementField->setContent(null);
            }
        }

        return $this;
    }

    public function addTag(Tag ...$tags): void
    {
        foreach ($tags as $tag) {
            if (!$this->tags->contains($tag)) {
                $this->tags->add($tag);
            }
        }
    }

    public function removeTag(Tag $tag): void
    {
        $this->tags->removeElement($tag);
    }

    public function getTags(): Collection
    {
        return $this->tags;
    }
}
