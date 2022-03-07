<?php

namespace ContainerFxo4uRq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereac91 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer50c29 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd0c52 = [
        
    ];

    public function getConnection()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getConnection', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getMetadataFactory', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getExpressionBuilder', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'beginTransaction', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getCache', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getCache();
    }

    public function transactional($func)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'transactional', array('func' => $func), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'wrapInTransaction', array('func' => $func), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'commit', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->commit();
    }

    public function rollback()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'rollback', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getClassMetadata', array('className' => $className), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'createQuery', array('dql' => $dql), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'createNamedQuery', array('name' => $name), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'createQueryBuilder', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'flush', array('entity' => $entity), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'clear', array('entityName' => $entityName), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->clear($entityName);
    }

    public function close()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'close', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->close();
    }

    public function persist($entity)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'persist', array('entity' => $entity), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'remove', array('entity' => $entity), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'refresh', array('entity' => $entity), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'detach', array('entity' => $entity), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'merge', array('entity' => $entity), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getRepository', array('entityName' => $entityName), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'contains', array('entity' => $entity), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getEventManager', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getConfiguration', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'isOpen', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getUnitOfWork', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getProxyFactory', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'initializeObject', array('obj' => $obj), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'getFilters', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'isFiltersStateClean', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'hasFilters', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return $this->valueHoldereac91->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer50c29 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereac91) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereac91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereac91->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, '__get', ['name' => $name], $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        if (isset(self::$publicPropertiesd0c52[$name])) {
            return $this->valueHoldereac91->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereac91;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereac91;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereac91;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereac91;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, '__isset', array('name' => $name), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereac91;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereac91;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, '__unset', array('name' => $name), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereac91;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereac91;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, '__clone', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        $this->valueHoldereac91 = clone $this->valueHoldereac91;
    }

    public function __sleep()
    {
        $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, '__sleep', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;

        return array('valueHoldereac91');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer50c29 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer50c29;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer50c29 && ($this->initializer50c29->__invoke($valueHoldereac91, $this, 'initializeProxy', array(), $this->initializer50c29) || 1) && $this->valueHoldereac91 = $valueHoldereac91;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereac91;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereac91;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
