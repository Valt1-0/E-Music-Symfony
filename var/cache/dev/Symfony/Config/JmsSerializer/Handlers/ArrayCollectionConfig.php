<?php

namespace Symfony\Config\JmsSerializer\Handlers;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ArrayCollectionConfig 
{
    private $initializeExcluded;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function initializeExcluded($value): self
    {
        $this->initializeExcluded = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['initialize_excluded'])) {
            $this->initializeExcluded = $value['initialize_excluded'];
            unset($value['initialize_excluded']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->initializeExcluded) {
            $output['initialize_excluded'] = $this->initializeExcluded;
        }
    
        return $output;
    }
    

}
