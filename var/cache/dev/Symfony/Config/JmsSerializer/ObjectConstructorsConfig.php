<?php

namespace Symfony\Config\JmsSerializer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ObjectConstructors'.\DIRECTORY_SEPARATOR.'DoctrineConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ObjectConstructorsConfig 
{
    private $doctrine;
    
    public function doctrine(array $value = []): \Symfony\Config\JmsSerializer\ObjectConstructors\DoctrineConfig
    {
        if (null === $this->doctrine) {
            $this->doctrine = new \Symfony\Config\JmsSerializer\ObjectConstructors\DoctrineConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrine()" has already been initialized. You cannot pass values the second time you call doctrine().');
        }
    
        return $this->doctrine;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['doctrine'])) {
            $this->doctrine = new \Symfony\Config\JmsSerializer\ObjectConstructors\DoctrineConfig($value['doctrine']);
            unset($value['doctrine']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->doctrine) {
            $output['doctrine'] = $this->doctrine->toArray();
        }
    
        return $output;
    }
    

}
