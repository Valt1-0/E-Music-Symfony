<?php

namespace Symfony\Config\JmsSerializer\Visitors;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class JsonDeserializationConfig 
{
    private $options;
    
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
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
    
        return $output;
    }
    

}
