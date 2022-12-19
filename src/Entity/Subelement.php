<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use function Symfony\Component\String\u;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="symfony_subelement")
 */
class Subelement
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
     * @var Element
     *
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="subelements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $element;

    /**
     * @var string
     *
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

    public function __construct()
    {
        $this->publishedAt = new \DateTime();
        $this->textfields = new ArrayCollection();
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
}
