<?php

namespace ContainerWAKhUx8;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder26c2b = null;
    private $initializer92dc8 = null;
    private static $publicPropertiesba559 = [
        
    ];
    public function getConnection()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getConnection', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getMetadataFactory', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getExpressionBuilder', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'beginTransaction', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getCache', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getCache();
    }
    public function transactional($func)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'transactional', array('func' => $func), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->transactional($func);
    }
    public function commit()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'commit', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->commit();
    }
    public function rollback()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'rollback', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getClassMetadata', array('className' => $className), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'createQuery', array('dql' => $dql), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'createNamedQuery', array('name' => $name), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'createQueryBuilder', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'flush', array('entity' => $entity), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'clear', array('entityName' => $entityName), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->clear($entityName);
    }
    public function close()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'close', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->close();
    }
    public function persist($entity)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'persist', array('entity' => $entity), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'remove', array('entity' => $entity), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'refresh', array('entity' => $entity), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'detach', array('entity' => $entity), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'merge', array('entity' => $entity), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'contains', array('entity' => $entity), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getEventManager', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getConfiguration', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'isOpen', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getUnitOfWork', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getProxyFactory', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'initializeObject', array('obj' => $obj), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'getFilters', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'isFiltersStateClean', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'hasFilters', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return $this->valueHolder26c2b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer92dc8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder26c2b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder26c2b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder26c2b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, '__get', ['name' => $name], $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        if (isset(self::$publicPropertiesba559[$name])) {
            return $this->valueHolder26c2b->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26c2b;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder26c2b;
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
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26c2b;
            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder26c2b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, '__isset', array('name' => $name), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26c2b;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder26c2b;
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
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, '__unset', array('name' => $name), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26c2b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder26c2b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, '__clone', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        $this->valueHolder26c2b = clone $this->valueHolder26c2b;
    }
    public function __sleep()
    {
        $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, '__sleep', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
        return array('valueHolder26c2b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer92dc8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer92dc8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer92dc8 && ($this->initializer92dc8->__invoke($valueHolder26c2b, $this, 'initializeProxy', array(), $this->initializer92dc8) || 1) && $this->valueHolder26c2b = $valueHolder26c2b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder26c2b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder26c2b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
