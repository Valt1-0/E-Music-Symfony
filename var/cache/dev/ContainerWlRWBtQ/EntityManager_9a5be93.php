<?php

namespace ContainerWlRWBtQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder40a7d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84282 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese9980 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getConnection', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getMetadataFactory', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getExpressionBuilder', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'beginTransaction', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getCache', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'transactional', array('func' => $func), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'commit', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->commit();
    }

    public function rollback()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'rollback', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getClassMetadata', array('className' => $className), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'createQuery', array('dql' => $dql), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'createNamedQuery', array('name' => $name), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'createQueryBuilder', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'flush', array('entity' => $entity), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'clear', array('entityName' => $entityName), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->clear($entityName);
    }

    public function close()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'close', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->close();
    }

    public function persist($entity)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'persist', array('entity' => $entity), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'remove', array('entity' => $entity), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'refresh', array('entity' => $entity), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'detach', array('entity' => $entity), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'merge', array('entity' => $entity), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'contains', array('entity' => $entity), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getEventManager', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getConfiguration', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'isOpen', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getUnitOfWork', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getProxyFactory', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'initializeObject', array('obj' => $obj), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'getFilters', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'isFiltersStateClean', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'hasFilters', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return $this->valueHolder40a7d->hasFilters();
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

        $instance->initializer84282 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder40a7d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder40a7d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder40a7d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, '__get', ['name' => $name], $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        if (isset(self::$publicPropertiese9980[$name])) {
            return $this->valueHolder40a7d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40a7d;

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

        $targetObject = $this->valueHolder40a7d;
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
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40a7d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder40a7d;
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
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, '__isset', array('name' => $name), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40a7d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder40a7d;
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
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, '__unset', array('name' => $name), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40a7d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder40a7d;
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
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, '__clone', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        $this->valueHolder40a7d = clone $this->valueHolder40a7d;
    }

    public function __sleep()
    {
        $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, '__sleep', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;

        return array('valueHolder40a7d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer84282 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84282;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84282 && ($this->initializer84282->__invoke($valueHolder40a7d, $this, 'initializeProxy', array(), $this->initializer84282) || 1) && $this->valueHolder40a7d = $valueHolder40a7d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder40a7d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder40a7d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
