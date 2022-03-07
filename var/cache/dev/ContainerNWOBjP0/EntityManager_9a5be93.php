<?php

namespace ContainerNWOBjP0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder31d75 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer527d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3d0a9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getConnection', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getMetadataFactory', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getExpressionBuilder', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'beginTransaction', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getCache', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getCache();
    }

    public function transactional($func)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'transactional', array('func' => $func), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'wrapInTransaction', array('func' => $func), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'commit', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->commit();
    }

    public function rollback()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'rollback', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getClassMetadata', array('className' => $className), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'createQuery', array('dql' => $dql), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'createNamedQuery', array('name' => $name), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'createQueryBuilder', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'flush', array('entity' => $entity), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'clear', array('entityName' => $entityName), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->clear($entityName);
    }

    public function close()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'close', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->close();
    }

    public function persist($entity)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'persist', array('entity' => $entity), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'remove', array('entity' => $entity), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'refresh', array('entity' => $entity), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'detach', array('entity' => $entity), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'merge', array('entity' => $entity), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getRepository', array('entityName' => $entityName), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'contains', array('entity' => $entity), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getEventManager', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getConfiguration', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'isOpen', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getUnitOfWork', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getProxyFactory', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'initializeObject', array('obj' => $obj), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'getFilters', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'isFiltersStateClean', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'hasFilters', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return $this->valueHolder31d75->hasFilters();
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

        $instance->initializer527d1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder31d75) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder31d75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder31d75->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, '__get', ['name' => $name], $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        if (isset(self::$publicProperties3d0a9[$name])) {
            return $this->valueHolder31d75->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d75;

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

        $targetObject = $this->valueHolder31d75;
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
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d75;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder31d75;
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
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, '__isset', array('name' => $name), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d75;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder31d75;
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
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, '__unset', array('name' => $name), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d75;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder31d75;
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
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, '__clone', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        $this->valueHolder31d75 = clone $this->valueHolder31d75;
    }

    public function __sleep()
    {
        $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, '__sleep', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;

        return array('valueHolder31d75');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer527d1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer527d1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer527d1 && ($this->initializer527d1->__invoke($valueHolder31d75, $this, 'initializeProxy', array(), $this->initializer527d1) || 1) && $this->valueHolder31d75 = $valueHolder31d75;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder31d75;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder31d75;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
