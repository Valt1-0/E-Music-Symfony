<?php

namespace Symfony\Config\JmsSerializer\Metadata\Warmup;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PathsConfig 
{
    private $included;
    private $excluded;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function included($value): self
    {
        $this->included = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function excluded($value): self
    {
        $this->excluded = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['included'])) {
            $this->included = $value['included'];
            unset($value['included']);
        }
    
        if (isset($value['excluded'])) {
            $this->excluded = $value['excluded'];
            unset($value['excluded']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->included) {
            $output['included'] = $this->included;
        }
        if (null !== $this->excluded) {
            $output['excluded'] = $this->excluded;
        }
    
        return $output;
    }
    

}
