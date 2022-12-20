<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ElementRepository")
 * @ORM\Table(name="symfony_element")
 * @UniqueEntity(fields={"slug"}, errorPath="title", message="element.slug_unique")
 */
class Element
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="element.blank_summary")
     * @Assert\Length(max=255)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="element.blank_content")
     * @Assert\Length(min=10, minMessage="element.too_short_content")
     */
    private $content;

    /**
     * @var \DateTime
     *
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
     * @var Subelement[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="Subelement",
     *      mappedBy="element",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     * @ORM\OrderBy({"publishedAt": "DESC"})
     */
    private $subelements;

    /**
     * @var Tag[]|Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", cascade={"persist"})
     * @ORM\JoinTable(name="symfony_element_tag")
     * @ORM\OrderBy({"name": "ASC"})
     * @Assert\Count(max="4", maxMessage="label.too_many_tags")
     */
    private $tags;

    /**
     * @var TextFields[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="TextFields",
     *      mappedBy="element",
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
     *      mappedBy="element",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     * @ORM\OrderBy({"id": "DESC"})
     */
    private $datefields;

    public function __construct()
    {
        $this->publishedAt = new \DateTime();
        $this->subelements = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->textfields = new ArrayCollection();
        $this->datefields = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
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

    public function getSubelements(): Collection
    {
        return $this->subelements;
    }

    public function addSubelement(Subelement $subelement): void
    {
        $subelement->setElement($this);
        if (!$this->subelements->contains($subelement)) {
            $this->subelements->add($subelement);
        }
    }

    public function removeSubelement(Subelement $subelement): void
    {
        $this->subelements->removeElement($subelement);
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): void
    {
        $this->summary = $summary;
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

    public function getTextFields(): Collection
    {
        return $this->textfields;
    }

    public function addTextField(TextFields $textfield): void
    {
        $textfield->setElement($this);
        if (!$this->textfields->contains($textfield)) {
            $this->textfields->add($textfield);
        }
    }

    public function removeTextField(TextFields $textfield): void
    {
        $this->textfield->removeElement($textfield);
    }

    public function getDateFields(): Collection
    {
        return $this->datefields;
    }

    public function addDateField(DateFields $datefield): void
    {
        $datefield->setElement($this);
        if (!$this->datefields->contains($datefield)) {
            $this->datefields->add($datefield);
        }
    }

    public function removeDateField(DateFields $datefield): void
    {
        $this->datefield->removeElement($datefield);
    }
}
