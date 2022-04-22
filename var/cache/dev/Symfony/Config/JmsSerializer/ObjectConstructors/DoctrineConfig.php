<?php

namespace Symfony\Config\JmsSerializer\ObjectConstructors;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DoctrineConfig 
{
    private $fallbackStrategy;
    
    /**
     * @default 'null'
     * @param ParamConfigurator|'null'|'exception'|'fallback' $value
     * @return $this
     */
    public function fallbackStrategy($value): self
    {
        $this->fallbackStrategy = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['fallback_strategy'])) {
            $this->fallbackStrategy = $value['fallback_strategy'];
            unset($value['fallback_strategy']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->fallbackStrategy) {
            $output['fallback_strategy'] = $this->fallbackStrategy;
        }
    
        return $output;
    }
    

}
