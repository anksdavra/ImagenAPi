<?php

namespace ContainerTx2Fbtm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5cb8b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer63a4c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7fae5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getConnection', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getMetadataFactory', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getExpressionBuilder', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'beginTransaction', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getCache', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'transactional', array('func' => $func), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'commit', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->commit();
    }

    public function rollback()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'rollback', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getClassMetadata', array('className' => $className), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'createQuery', array('dql' => $dql), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'createNamedQuery', array('name' => $name), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'createQueryBuilder', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'flush', array('entity' => $entity), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'clear', array('entityName' => $entityName), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->clear($entityName);
    }

    public function close()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'close', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->close();
    }

    public function persist($entity)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'persist', array('entity' => $entity), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'remove', array('entity' => $entity), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'refresh', array('entity' => $entity), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'detach', array('entity' => $entity), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'merge', array('entity' => $entity), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'contains', array('entity' => $entity), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getEventManager', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getConfiguration', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'isOpen', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getUnitOfWork', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getProxyFactory', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'initializeObject', array('obj' => $obj), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'getFilters', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'isFiltersStateClean', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'hasFilters', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return $this->valueHolder5cb8b->hasFilters();
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

        $instance->initializer63a4c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5cb8b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5cb8b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5cb8b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, '__get', ['name' => $name], $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        if (isset(self::$publicProperties7fae5[$name])) {
            return $this->valueHolder5cb8b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cb8b;

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

        $targetObject = $this->valueHolder5cb8b;
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
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cb8b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5cb8b;
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
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, '__isset', array('name' => $name), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cb8b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5cb8b;
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
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, '__unset', array('name' => $name), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cb8b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5cb8b;
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
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, '__clone', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        $this->valueHolder5cb8b = clone $this->valueHolder5cb8b;
    }

    public function __sleep()
    {
        $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, '__sleep', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;

        return array('valueHolder5cb8b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer63a4c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer63a4c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer63a4c && ($this->initializer63a4c->__invoke($valueHolder5cb8b, $this, 'initializeProxy', array(), $this->initializer63a4c) || 1) && $this->valueHolder5cb8b = $valueHolder5cb8b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5cb8b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5cb8b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
