<?php

namespace ContainerJFfGHQF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ed9a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer43b2a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87c1d = [
        
    ];

    public function getConnection()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getConnection', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getMetadataFactory', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getExpressionBuilder', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'beginTransaction', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getCache', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'transactional', array('func' => $func), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'commit', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->commit();
    }

    public function rollback()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'rollback', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getClassMetadata', array('className' => $className), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'createQuery', array('dql' => $dql), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'createNamedQuery', array('name' => $name), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'createQueryBuilder', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'flush', array('entity' => $entity), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'clear', array('entityName' => $entityName), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->clear($entityName);
    }

    public function close()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'close', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->close();
    }

    public function persist($entity)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'persist', array('entity' => $entity), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'remove', array('entity' => $entity), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'refresh', array('entity' => $entity), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'detach', array('entity' => $entity), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'merge', array('entity' => $entity), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'contains', array('entity' => $entity), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getEventManager', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getConfiguration', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'isOpen', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getUnitOfWork', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getProxyFactory', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'initializeObject', array('obj' => $obj), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'getFilters', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'isFiltersStateClean', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'hasFilters', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return $this->valueHolder8ed9a->hasFilters();
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

        $instance->initializer43b2a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8ed9a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ed9a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ed9a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, '__get', ['name' => $name], $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        if (isset(self::$publicProperties87c1d[$name])) {
            return $this->valueHolder8ed9a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ed9a;

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

        $targetObject = $this->valueHolder8ed9a;
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
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ed9a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ed9a;
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
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, '__isset', array('name' => $name), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ed9a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ed9a;
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
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, '__unset', array('name' => $name), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ed9a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ed9a;
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
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, '__clone', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        $this->valueHolder8ed9a = clone $this->valueHolder8ed9a;
    }

    public function __sleep()
    {
        $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, '__sleep', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;

        return array('valueHolder8ed9a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43b2a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43b2a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer43b2a && ($this->initializer43b2a->__invoke($valueHolder8ed9a, $this, 'initializeProxy', array(), $this->initializer43b2a) || 1) && $this->valueHolder8ed9a = $valueHolder8ed9a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ed9a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ed9a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
