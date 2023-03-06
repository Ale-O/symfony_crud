<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Subelement extends \App\Entity\Subelement implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'element', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'publishedAt', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'author', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'textfields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'datefields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'numberFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'fileFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'subelementFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'selectInSubelementFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'tags'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'element', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'publishedAt', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'author', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'textfields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'datefields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'numberFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'fileFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'subelementFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'selectInSubelementFields', '' . "\0" . 'App\\Entity\\Subelement' . "\0" . 'tags'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Subelement $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function isLegitSubelement(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLegitSubelement', []);

        return parent::isLegitSubelement();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(string $content): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishedAt(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishedAt', []);

        return parent::getPublishedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishedAt(\DateTime $publishedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishedAt', [$publishedAt]);

        parent::setPublishedAt($publishedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor(\App\Entity\User $author): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getElement(): ?\App\Entity\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElement', []);

        return parent::getElement();
    }

    /**
     * {@inheritDoc}
     */
    public function setElement(\App\Entity\Element $element): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setElement', [$element]);

        parent::setElement($element);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTextFields(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextFields', []);

        return parent::getTextFields();
    }

    /**
     * {@inheritDoc}
     */
    public function addTextField(\App\Entity\TextFields $textfield): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTextField', [$textfield]);

        parent::addTextField($textfield);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTextField(\App\Entity\TextFields $textfield): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTextField', [$textfield]);

        parent::removeTextField($textfield);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFields(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFields', []);

        return parent::getDateFields();
    }

    /**
     * {@inheritDoc}
     */
    public function addDateField(\App\Entity\DateFields $datefield): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDateField', [$datefield]);

        parent::addDateField($datefield);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDateField(\App\Entity\DateFields $datefield): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDateField', [$datefield]);

        parent::removeDateField($datefield);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberFields(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberFields', []);

        return parent::getNumberFields();
    }

    /**
     * {@inheritDoc}
     */
    public function addNumberField(\App\Entity\NumberFields $numberField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNumberField', [$numberField]);

        return parent::addNumberField($numberField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNumberField(\App\Entity\NumberFields $numberField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNumberField', [$numberField]);

        return parent::removeNumberField($numberField);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileFields(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileFields', []);

        return parent::getFileFields();
    }

    /**
     * {@inheritDoc}
     */
    public function addFileField(\App\Entity\FileFields $fileField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFileField', [$fileField]);

        return parent::addFileField($fileField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFileField(\App\Entity\FileFields $fileField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFileField', [$fileField]);

        return parent::removeFileField($fileField);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubelementFields(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubelementFields', []);

        return parent::getSubelementFields();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubelementField(\App\Entity\SubelementFields $subelementField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubelementField', [$subelementField]);

        return parent::addSubelementField($subelementField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubelementField(\App\Entity\SubelementFields $subelementField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubelementField', [$subelementField]);

        return parent::removeSubelementField($subelementField);
    }

    /**
     * {@inheritDoc}
     */
    public function getSelectInSubelementFields(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSelectInSubelementFields', []);

        return parent::getSelectInSubelementFields();
    }

    /**
     * {@inheritDoc}
     */
    public function addSelectInSubelementField(\App\Entity\SubelementFields $selectInSubelementField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSelectInSubelementField', [$selectInSubelementField]);

        return parent::addSelectInSubelementField($selectInSubelementField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSelectInSubelementField(\App\Entity\SubelementFields $selectInSubelementField): \App\Entity\Subelement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSelectInSubelementField', [$selectInSubelementField]);

        return parent::removeSelectInSubelementField($selectInSubelementField);
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\App\Entity\Tag ...$tags): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tags]);

        parent::addTag(...$tags);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\App\Entity\Tag $tag): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

}
