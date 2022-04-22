<?php

namespace Symfony\Config\JmsSerializer\Visitors;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class XmlSerializationConfig 
{
    private $version;
    private $encoding;
    private $formatOutput;
    private $defaultRootName;
    private $defaultRootNs;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): self
    {
        $this->version = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function encoding($value): self
    {
        $this->encoding = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function formatOutput($value): self
    {
        $this->formatOutput = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultRootName($value): self
    {
        $this->defaultRootName = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultRootNs($value): self
    {
        $this->defaultRootNs = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['version'])) {
            $this->version = $value['version'];
            unset($value['version']);
        }
    
        if (isset($value['encoding'])) {
            $this->encoding = $value['encoding'];
            unset($value['encoding']);
        }
    
        if (isset($value['format_output'])) {
            $this->formatOutput = $value['format_output'];
            unset($value['format_output']);
        }
    
        if (isset($value['default_root_name'])) {
            $this->defaultRootName = $value['default_root_name'];
            unset($value['default_root_name']);
        }
    
        if (isset($value['default_root_ns'])) {
            $this->defaultRootNs = $value['default_root_ns'];
            unset($value['default_root_ns']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->version) {
            $output['version'] = $this->version;
        }
        if (null !== $this->encoding) {
            $output['encoding'] = $this->encoding;
        }
        if (null !== $this->formatOutput) {
            $output['format_output'] = $this->formatOutput;
        }
        if (null !== $this->defaultRootName) {
            $output['default_root_name'] = $this->defaultRootName;
        }
        if (null !== $this->defaultRootNs) {
            $output['default_root_ns'] = $this->defaultRootNs;
        }
    
        return $output;
    }
    

}
