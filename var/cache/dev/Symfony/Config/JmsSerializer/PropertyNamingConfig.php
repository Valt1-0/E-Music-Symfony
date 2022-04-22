<?php

namespace Symfony\Config\JmsSerializer;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PropertyNamingConfig 
{
    private $id;
    private $separator;
    private $lowerCase;
    
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
     * @default '_'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function separator($value): self
    {
        $this->separator = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function lowerCase($value): self
    {
        $this->lowerCase = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['id'])) {
            $this->id = $value['id'];
            unset($value['id']);
        }
    
        if (isset($value['separator'])) {
            $this->separator = $value['separator'];
            unset($value['separator']);
        }
    
        if (isset($value['lower_case'])) {
            $this->lowerCase = $value['lower_case'];
            unset($value['lower_case']);
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
        if (null !== $this->separator) {
            $output['separator'] = $this->separator;
        }
        if (null !== $this->lowerCase) {
            $output['lower_case'] = $this->lowerCase;
        }
    
        return $output;
    }
    

}
