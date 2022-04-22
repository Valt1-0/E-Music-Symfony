<?php

namespace Symfony\Config\JmsSerializer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Subscribers'.\DIRECTORY_SEPARATOR.'DoctrineProxyConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SubscribersConfig 
{
    private $doctrineProxy;
    
    public function doctrineProxy(array $value = []): \Symfony\Config\JmsSerializer\Subscribers\DoctrineProxyConfig
    {
        if (null === $this->doctrineProxy) {
            $this->doctrineProxy = new \Symfony\Config\JmsSerializer\Subscribers\DoctrineProxyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrineProxy()" has already been initialized. You cannot pass values the second time you call doctrineProxy().');
        }
    
        return $this->doctrineProxy;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['doctrine_proxy'])) {
            $this->doctrineProxy = new \Symfony\Config\JmsSerializer\Subscribers\DoctrineProxyConfig($value['doctrine_proxy']);
            unset($value['doctrine_proxy']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->doctrineProxy) {
            $output['doctrine_proxy'] = $this->doctrineProxy->toArray();
        }
    
        return $output;
    }
    

}
