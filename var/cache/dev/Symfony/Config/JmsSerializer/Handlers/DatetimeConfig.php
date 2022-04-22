<?php

namespace Symfony\Config\JmsSerializer\Handlers;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DatetimeConfig 
{
    private $defaultFormat;
    private $defaultTimezone;
    private $cdata;
    
    /**
     * @default 'Y-m-d\\TH:i:sP'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultFormat($value): self
    {
        $this->defaultFormat = $value;
    
        return $this;
    }
    
    /**
     * @default 'UTC'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTimezone($value): self
    {
        $this->defaultTimezone = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cdata($value): self
    {
        $this->cdata = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_format'])) {
            $this->defaultFormat = $value['default_format'];
            unset($value['default_format']);
        }
    
        if (isset($value['default_timezone'])) {
            $this->defaultTimezone = $value['default_timezone'];
            unset($value['default_timezone']);
        }
    
        if (isset($value['cdata'])) {
            $this->cdata = $value['cdata'];
            unset($value['cdata']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultFormat) {
            $output['default_format'] = $this->defaultFormat;
        }
        if (null !== $this->defaultTimezone) {
            $output['default_timezone'] = $this->defaultTimezone;
        }
        if (null !== $this->cdata) {
            $output['cdata'] = $this->cdata;
        }
    
        return $output;
    }
    

}
