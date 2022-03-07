<?php

namespace ContainerMiaTfpr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8222e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9f635 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc74c7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getConnection', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getMetadataFactory', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getExpressionBuilder', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'beginTransaction', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getCache', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'transactional', array('func' => $func), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'commit', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->commit();
    }

    public function rollback()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'rollback', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getClassMetadata', array('className' => $className), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'createQuery', array('dql' => $dql), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'createNamedQuery', array('name' => $name), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'createQueryBuilder', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'flush', array('entity' => $entity), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'clear', array('entityName' => $entityName), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->clear($entityName);
    }

    public function close()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'close', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->close();
    }

    public function persist($entity)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'persist', array('entity' => $entity), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'remove', array('entity' => $entity), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'refresh', array('entity' => $entity), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'detach', array('entity' => $entity), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'merge', array('entity' => $entity), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'contains', array('entity' => $entity), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getEventManager', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getConfiguration', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'isOpen', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getUnitOfWork', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getProxyFactory', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'initializeObject', array('obj' => $obj), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'getFilters', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'isFiltersStateClean', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'hasFilters', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return $this->valueHolder8222e->hasFilters();
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

        $instance->initializer9f635 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8222e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8222e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8222e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, '__get', ['name' => $name], $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        if (isset(self::$publicPropertiesc74c7[$name])) {
            return $this->valueHolder8222e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8222e;

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

        $targetObject = $this->valueHolder8222e;
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
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8222e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8222e;
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
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, '__isset', array('name' => $name), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8222e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8222e;
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
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, '__unset', array('name' => $name), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8222e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8222e;
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
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, '__clone', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        $this->valueHolder8222e = clone $this->valueHolder8222e;
    }

    public function __sleep()
    {
        $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, '__sleep', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;

        return array('valueHolder8222e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9f635 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9f635;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9f635 && ($this->initializer9f635->__invoke($valueHolder8222e, $this, 'initializeProxy', array(), $this->initializer9f635) || 1) && $this->valueHolder8222e = $valueHolder8222e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8222e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8222e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
