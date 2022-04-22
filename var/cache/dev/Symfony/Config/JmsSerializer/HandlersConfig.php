<?php

namespace Symfony\Config\JmsSerializer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Handlers'.\DIRECTORY_SEPARATOR.'DatetimeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Handlers'.\DIRECTORY_SEPARATOR.'ArrayCollectionConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HandlersConfig 
{
    private $datetime;
    private $arrayCollection;
    
    public function datetime(array $value = []): \Symfony\Config\JmsSerializer\Handlers\DatetimeConfig
    {
        if (null === $this->datetime) {
            $this->datetime = new \Symfony\Config\JmsSerializer\Handlers\DatetimeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "datetime()" has already been initialized. You cannot pass values the second time you call datetime().');
        }
    
        return $this->datetime;
    }
    
    public function arrayCollection(array $value = []): \Symfony\Config\JmsSerializer\Handlers\ArrayCollectionConfig
    {
        if (null === $this->arrayCollection) {
            $this->arrayCollection = new \Symfony\Config\JmsSerializer\Handlers\ArrayCollectionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "arrayCollection()" has already been initialized. You cannot pass values the second time you call arrayCollection().');
        }
    
        return $this->arrayCollection;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['datetime'])) {
            $this->datetime = new \Symfony\Config\JmsSerializer\Handlers\DatetimeConfig($value['datetime']);
            unset($value['datetime']);
        }
    
        if (isset($value['array_collection'])) {
            $this->arrayCollection = new \Symfony\Config\JmsSerializer\Handlers\ArrayCollectionConfig($value['array_collection']);
            unset($value['array_collection']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->datetime) {
            $output['datetime'] = $this->datetime->toArray();
        }
        if (null !== $this->arrayCollection) {
            $output['array_collection'] = $this->arrayCollection->toArray();
        }
    
        return $output;
    }
    

}
