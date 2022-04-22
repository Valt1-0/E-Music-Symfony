<?php

namespace Symfony\Config\JmsSerializer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'WarmupConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'FileCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'DirectoryConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MetadataConfig 
{
    private $warmup;
    private $cache;
    private $debug;
    private $fileCache;
    private $includeInterfaces;
    private $autoDetection;
    private $inferTypesFromDocBlock;
    private $inferTypesFromDoctrineMetadata;
    private $directories;
    
    public function warmup(array $value = []): \Symfony\Config\JmsSerializer\Metadata\WarmupConfig
    {
        if (null === $this->warmup) {
            $this->warmup = new \Symfony\Config\JmsSerializer\Metadata\WarmupConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "warmup()" has already been initialized. You cannot pass values the second time you call warmup().');
        }
    
        return $this->warmup;
    }
    
    /**
     * @default 'file'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->debug = $value;
    
        return $this;
    }
    
    public function fileCache(array $value = []): \Symfony\Config\JmsSerializer\Metadata\FileCacheConfig
    {
        if (null === $this->fileCache) {
            $this->fileCache = new \Symfony\Config\JmsSerializer\Metadata\FileCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "fileCache()" has already been initialized. You cannot pass values the second time you call fileCache().');
        }
    
        return $this->fileCache;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function includeInterfaces($value): self
    {
        $this->includeInterfaces = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoDetection($value): self
    {
        $this->autoDetection = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function inferTypesFromDocBlock($value): self
    {
        $this->inferTypesFromDocBlock = $value;
    
        return $this;
    }
    
    /**
     * Infers type information from Doctrine metadata if no explicit type has been defined for a property.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function inferTypesFromDoctrineMetadata($value): self
    {
        $this->inferTypesFromDoctrineMetadata = $value;
    
        return $this;
    }
    
    public function directory(string $name, array $value = []): \Symfony\Config\JmsSerializer\Metadata\DirectoryConfig
    {
        if (!isset($this->directories[$name])) {
            return $this->directories[$name] = new \Symfony\Config\JmsSerializer\Metadata\DirectoryConfig($value);
        }
        if ([] === $value) {
            return $this->directories[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "directory()" has already been initialized. You cannot pass values the second time you call directory().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['warmup'])) {
            $this->warmup = new \Symfony\Config\JmsSerializer\Metadata\WarmupConfig($value['warmup']);
            unset($value['warmup']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['debug'])) {
            $this->debug = $value['debug'];
            unset($value['debug']);
        }
    
        if (isset($value['file_cache'])) {
            $this->fileCache = new \Symfony\Config\JmsSerializer\Metadata\FileCacheConfig($value['file_cache']);
            unset($value['file_cache']);
        }
    
        if (isset($value['include_interfaces'])) {
            $this->includeInterfaces = $value['include_interfaces'];
            unset($value['include_interfaces']);
        }
    
        if (isset($value['auto_detection'])) {
            $this->autoDetection = $value['auto_detection'];
            unset($value['auto_detection']);
        }
    
        if (isset($value['infer_types_from_doc_block'])) {
            $this->inferTypesFromDocBlock = $value['infer_types_from_doc_block'];
            unset($value['infer_types_from_doc_block']);
        }
    
        if (isset($value['infer_types_from_doctrine_metadata'])) {
            $this->inferTypesFromDoctrineMetadata = $value['infer_types_from_doctrine_metadata'];
            unset($value['infer_types_from_doctrine_metadata']);
        }
    
        if (isset($value['directories'])) {
            $this->directories = array_map(function ($v) { return new \Symfony\Config\JmsSerializer\Metadata\DirectoryConfig($v); }, $value['directories']);
            unset($value['directories']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->warmup) {
            $output['warmup'] = $this->warmup->toArray();
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->debug) {
            $output['debug'] = $this->debug;
        }
        if (null !== $this->fileCache) {
            $output['file_cache'] = $this->fileCache->toArray();
        }
        if (null !== $this->includeInterfaces) {
            $output['include_interfaces'] = $this->includeInterfaces;
        }
        if (null !== $this->autoDetection) {
            $output['auto_detection'] = $this->autoDetection;
        }
        if (null !== $this->inferTypesFromDocBlock) {
            $output['infer_types_from_doc_block'] = $this->inferTypesFromDocBlock;
        }
        if (null !== $this->inferTypesFromDoctrineMetadata) {
            $output['infer_types_from_doctrine_metadata'] = $this->inferTypesFromDoctrineMetadata;
        }
        if (null !== $this->directories) {
            $output['directories'] = array_map(function ($v) { return $v->toArray(); }, $this->directories);
        }
    
        return $output;
    }
    

}
