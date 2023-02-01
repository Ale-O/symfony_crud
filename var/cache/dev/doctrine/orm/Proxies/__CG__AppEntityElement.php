<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Element extends \App\Entity\Element implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'summary', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'publishedAt', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'author', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'subelements', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'textfields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'datefields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'numberFields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'fileFields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'subelementFields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'filterInSubelementFields'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'summary', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'publishedAt', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'author', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'subelements', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'textfields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'datefields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'numberFields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'fileFields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'subelementFields', '' . "\0" . 'App\\Entity\\Element' . "\0" . 'filterInSubelementFields'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Element $proxy) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(?string $title): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        parent::setSlug($slug);
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
    public function setContent(?string $content): void
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
    public function getSubelements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubelements', []);

        return parent::getSubelements();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubelement(\App\Entity\Subelement $subelement): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubelement', [$subelement]);

        parent::addSubelement($subelement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubelement(\App\Entity\Subelement $subelement): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubelement', [$subelement]);

        parent::removeSubelement($subelement);
    }

    /**
     * {@inheritDoc}
     */
    public function getSummary(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSummary', []);

        return parent::getSummary();
    }

    /**
     * {@inheritDoc}
     */
    public function setSummary(?string $summary): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSummary', [$summary]);

        parent::setSummary($summary);
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
    public function addNumberField(\App\Entity\NumberFields $numberField): \App\Entity\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNumberField', [$numberField]);

        return parent::addNumberField($numberField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNumberField(\App\Entity\NumberFields $numberField): \App\Entity\Element
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
    public function addFileField(\App\Entity\FileFields $fileField): \App\Entity\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFileField', [$fileField]);

        return parent::addFileField($fileField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFileField(\App\Entity\FileFields $fileField): \App\Entity\Element
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
    public function addSubelementField(\App\Entity\SubelementFields $subelementField): \App\Entity\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubelementField', [$subelementField]);

        return parent::addSubelementField($subelementField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubelementField(\App\Entity\SubelementFields $subelementField): \App\Entity\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubelementField', [$subelementField]);

        return parent::removeSubelementField($subelementField);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilterInSubelementFields(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilterInSubelementFields', []);

        return parent::getFilterInSubelementFields();
    }

    /**
     * {@inheritDoc}
     */
    public function addFilterInSubelementField(\App\Entity\SubelementFields $filterInSubelementField): \App\Entity\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFilterInSubelementField', [$filterInSubelementField]);

        return parent::addFilterInSubelementField($filterInSubelementField);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFilterInSubelementField(\App\Entity\SubelementFields $filterInSubelementField): \App\Entity\Element
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFilterInSubelementField', [$filterInSubelementField]);

        return parent::removeFilterInSubelementField($filterInSubelementField);
    }

}
