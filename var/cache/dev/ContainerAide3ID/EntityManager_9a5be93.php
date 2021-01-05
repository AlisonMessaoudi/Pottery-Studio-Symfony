<?php

namespace ContainerAide3ID;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder47ab9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerac2d4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3c963 = [
        
    ];

    public function getConnection()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getConnection', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getMetadataFactory', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getExpressionBuilder', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'beginTransaction', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getCache', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getCache();
    }

    public function transactional($func)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'transactional', array('func' => $func), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->transactional($func);
    }

    public function commit()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'commit', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->commit();
    }

    public function rollback()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'rollback', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getClassMetadata', array('className' => $className), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'createQuery', array('dql' => $dql), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'createNamedQuery', array('name' => $name), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'createQueryBuilder', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'flush', array('entity' => $entity), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'clear', array('entityName' => $entityName), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->clear($entityName);
    }

    public function close()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'close', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->close();
    }

    public function persist($entity)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'persist', array('entity' => $entity), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'remove', array('entity' => $entity), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'refresh', array('entity' => $entity), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'detach', array('entity' => $entity), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'merge', array('entity' => $entity), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'contains', array('entity' => $entity), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getEventManager', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getConfiguration', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'isOpen', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getUnitOfWork', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getProxyFactory', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'initializeObject', array('obj' => $obj), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'getFilters', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'isFiltersStateClean', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'hasFilters', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return $this->valueHolder47ab9->hasFilters();
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

        $instance->initializerac2d4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder47ab9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47ab9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder47ab9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, '__get', ['name' => $name], $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        if (isset(self::$publicProperties3c963[$name])) {
            return $this->valueHolder47ab9->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47ab9;

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

        $targetObject = $this->valueHolder47ab9;
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
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47ab9;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder47ab9;
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
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, '__isset', array('name' => $name), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47ab9;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder47ab9;
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
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, '__unset', array('name' => $name), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47ab9;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder47ab9;
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
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, '__clone', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        $this->valueHolder47ab9 = clone $this->valueHolder47ab9;
    }

    public function __sleep()
    {
        $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, '__sleep', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;

        return array('valueHolder47ab9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerac2d4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerac2d4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerac2d4 && ($this->initializerac2d4->__invoke($valueHolder47ab9, $this, 'initializeProxy', array(), $this->initializerac2d4) || 1) && $this->valueHolder47ab9 = $valueHolder47ab9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47ab9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47ab9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
