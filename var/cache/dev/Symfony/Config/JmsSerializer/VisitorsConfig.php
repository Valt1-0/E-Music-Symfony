<?php

namespace Symfony\Config\JmsSerializer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'JsonSerializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'JsonDeserializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'XmlSerializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Visitors'.\DIRECTORY_SEPARATOR.'XmlDeserializationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class VisitorsConfig 
{
    private $jsonSerialization;
    private $jsonDeserialization;
    private $xmlSerialization;
    private $xmlDeserialization;
    
    public function jsonSerialization(array $value = []): \Symfony\Config\JmsSerializer\Visitors\JsonSerializationConfig
    {
        if (null === $this->jsonSerialization) {
            $this->jsonSerialization = new \Symfony\Config\JmsSerializer\Visitors\JsonSerializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "jsonSerialization()" has already been initialized. You cannot pass values the second time you call jsonSerialization().');
        }
    
        return $this->jsonSerialization;
    }
    
    public function jsonDeserialization(array $value = []): \Symfony\Config\JmsSerializer\Visitors\JsonDeserializationConfig
    {
        if (null === $this->jsonDeserialization) {
            $this->jsonDeserialization = new \Symfony\Config\JmsSerializer\Visitors\JsonDeserializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "jsonDeserialization()" has already been initialized. You cannot pass values the second time you call jsonDeserialization().');
        }
    
        return $this->jsonDeserialization;
    }
    
    public function xmlSerialization(array $value = []): \Symfony\Config\JmsSerializer\Visitors\XmlSerializationConfig
    {
        if (null === $this->xmlSerialization) {
            $this->xmlSerialization = new \Symfony\Config\JmsSerializer\Visitors\XmlSerializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "xmlSerialization()" has already been initialized. You cannot pass values the second time you call xmlSerialization().');
        }
    
        return $this->xmlSerialization;
    }
    
    public function xmlDeserialization(array $value = []): \Symfony\Config\JmsSerializer\Visitors\XmlDeserializationConfig
    {
        if (null === $this->xmlDeserialization) {
            $this->xmlDeserialization = new \Symfony\Config\JmsSerializer\Visitors\XmlDeserializationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "xmlDeserialization()" has already been initialized. You cannot pass values the second time you call xmlDeserialization().');
        }
    
        return $this->xmlDeserialization;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['json_serialization'])) {
            $this->jsonSerialization = new \Symfony\Config\JmsSerializer\Visitors\JsonSerializationConfig($value['json_serialization']);
            unset($value['json_serialization']);
        }
    
        if (isset($value['json_deserialization'])) {
            $this->jsonDeserialization = new \Symfony\Config\JmsSerializer\Visitors\JsonDeserializationConfig($value['json_deserialization']);
            unset($value['json_deserialization']);
        }
    
        if (isset($value['xml_serialization'])) {
            $this->xmlSerialization = new \Symfony\Config\JmsSerializer\Visitors\XmlSerializationConfig($value['xml_serialization']);
            unset($value['xml_serialization']);
        }
    
        if (isset($value['xml_deserialization'])) {
            $this->xmlDeserialization = new \Symfony\Config\JmsSerializer\Visitors\XmlDeserializationConfig($value['xml_deserialization']);
            unset($value['xml_deserialization']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->jsonSerialization) {
            $output['json_serialization'] = $this->jsonSerialization->toArray();
        }
        if (null !== $this->jsonDeserialization) {
            $output['json_deserialization'] = $this->jsonDeserialization->toArray();
        }
        if (null !== $this->xmlSerialization) {
            $output['xml_serialization'] = $this->xmlSerialization->toArray();
        }
        if (null !== $this->xmlDeserialization) {
            $output['xml_deserialization'] = $this->xmlDeserialization->toArray();
        }
    
        return $output;
    }
    

}
