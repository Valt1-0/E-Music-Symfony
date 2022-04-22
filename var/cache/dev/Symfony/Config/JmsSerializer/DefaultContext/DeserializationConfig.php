<?php

namespace Symfony\Config\JmsSerializer\DefaultContext;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DeserializationConfig 
{
    private $id;
    private $serializeNull;
    private $enableMaxDepthChecks;
    private $attributes;
    private $groups;
    private $version;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * Flag if null values should be serialized
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serializeNull($value): self
    {
        $this->serializeNull = $value;
    
        return $this;
    }
    
    /**
     * Flag to enable the max-depth exclusion strategy
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enableMaxDepthChecks($value): self
    {
        $this->enableMaxDepthChecks = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function attributes(string $key, $value): self
    {
        $this->attributes[$key] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function groups($value): self
    {
        $this->groups = $value;
    
        return $this;
    }
    
    /**
     * Application version to use in exclusion strategies
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): self
    {
        $this->version = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['id'])) {
            $this->id = $value['id'];
            unset($value['id']);
        }
    
        if (isset($value['serialize_null'])) {
            $this->serializeNull = $value['serialize_null'];
            unset($value['serialize_null']);
        }
    
        if (isset($value['enable_max_depth_checks'])) {
            $this->enableMaxDepthChecks = $value['enable_max_depth_checks'];
            unset($value['enable_max_depth_checks']);
        }
    
        if (isset($value['attributes'])) {
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }
    
        if (isset($value['groups'])) {
            $this->groups = $value['groups'];
            unset($value['groups']);
        }
    
        if (isset($value['version'])) {
            $this->version = $value['version'];
            unset($value['version']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->id) {
            $output['id'] = $this->id;
        }
        if (null !== $this->serializeNull) {
            $output['serialize_null'] = $this->serializeNull;
        }
        if (null !== $this->enableMaxDepthChecks) {
            $output['enable_max_depth_checks'] = $this->enableMaxDepthChecks;
        }
        if (null !== $this->attributes) {
            $output['attributes'] = $this->attributes;
        }
        if (null !== $this->groups) {
            $output['groups'] = $this->groups;
        }
        if (null !== $this->version) {
            $output['version'] = $this->version;
        }
    
        return $output;
    }
    

}
