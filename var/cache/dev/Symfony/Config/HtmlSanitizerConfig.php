<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HtmlSanitizerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultSanitizer;
    private $sanitizers;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultSanitizer($value): self
    {
        $this->_usedProperties['defaultSanitizer'] = true;
        $this->defaultSanitizer = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sanitizers(string $name, $value): self
    {
        $this->_usedProperties['sanitizers'] = true;
        $this->sanitizers[$name] = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'html_sanitizer';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('default_sanitizer', $value)) {
            $this->_usedProperties['defaultSanitizer'] = true;
            $this->defaultSanitizer = $value['default_sanitizer'];
            unset($value['default_sanitizer']);
        }

        if (array_key_exists('sanitizers', $value)) {
            $this->_usedProperties['sanitizers'] = true;
            $this->sanitizers = $value['sanitizers'];
            unset($value['sanitizers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultSanitizer'])) {
            $output['default_sanitizer'] = $this->defaultSanitizer;
        }
        if (isset($this->_usedProperties['sanitizers'])) {
            $output['sanitizers'] = $this->sanitizers;
        }

        return $output;
    }

}
