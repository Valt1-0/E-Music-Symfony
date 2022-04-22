<?php

namespace Symfony\Config\JmsSerializer\Visitors;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class XmlDeserializationConfig 
{
    private $doctypeWhitelist;
    private $externalEntities;
    private $options;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function doctypeWhitelist($value): self
    {
        $this->doctypeWhitelist = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function externalEntities($value): self
    {
        $this->externalEntities = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value): self
    {
        $this->options = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['doctype_whitelist'])) {
            $this->doctypeWhitelist = $value['doctype_whitelist'];
            unset($value['doctype_whitelist']);
        }
    
        if (isset($value['external_entities'])) {
            $this->externalEntities = $value['external_entities'];
            unset($value['external_entities']);
        }
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->doctypeWhitelist) {
            $output['doctype_whitelist'] = $this->doctypeWhitelist;
        }
        if (null !== $this->externalEntities) {
            $output['external_entities'] = $this->externalEntities;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
    
        return $output;
    }
    

}
