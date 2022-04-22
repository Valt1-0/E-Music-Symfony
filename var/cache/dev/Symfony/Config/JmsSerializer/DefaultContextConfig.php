<?php

namespace Symfony\Config\JmsSerializer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DefaultContext'.\DIRECTORY_SEPARATOR.'SerializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DefaultContext'.\DIRECTORY_SEPARATOR.'DeserializationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DefaultContextConfig 
{
    private $serialization;
    private $deserialization;
    
    public function serialization(array $value = []): \Symfony\Config\JmsSerializer\DefaultContext\SerializationConfig
    {
        if (null === $this->serialization) {
            $this->serialization = new \Symfony\Config\JmsSerializer\DefaultContext\SerializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "serialization()" has already been initialized. You cannot pass values the second time you call serialization().');
        }
    
        return $this->serialization;
    }
    
    public function deserialization(array $value = []): \Symfony\Config\JmsSerializer\DefaultContext\DeserializationConfig
    {
        if (null === $this->deserialization) {
            $this->deserialization = new \Symfony\Config\JmsSerializer\DefaultContext\DeserializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "deserialization()" has already been initialized. You cannot pass values the second time you call deserialization().');
        }
    
        return $this->deserialization;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['serialization'])) {
            $this->serialization = new \Symfony\Config\JmsSerializer\DefaultContext\SerializationConfig($value['serialization']);
            unset($value['serialization']);
        }
    
        if (isset($value['deserialization'])) {
            $this->deserialization = new \Symfony\Config\JmsSerializer\DefaultContext\DeserializationConfig($value['deserialization']);
            unset($value['deserialization']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->serialization) {
            $output['serialization'] = $this->serialization->toArray();
        }
        if (null !== $this->deserialization) {
            $output['deserialization'] = $this->deserialization->toArray();
        }
    
        return $output;
    }
    

}
