<?php

namespace ContainerAcpwsq2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7225f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2328a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties05bf1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getConnection', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getMetadataFactory', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getExpressionBuilder', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'beginTransaction', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getCache', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'transactional', array('func' => $func), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->transactional($func);
    }

    public function commit()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'commit', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->commit();
    }

    public function rollback()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'rollback', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getClassMetadata', array('className' => $className), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'createQuery', array('dql' => $dql), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'createNamedQuery', array('name' => $name), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'createQueryBuilder', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'flush', array('entity' => $entity), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'clear', array('entityName' => $entityName), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->clear($entityName);
    }

    public function close()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'close', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->close();
    }

    public function persist($entity)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'persist', array('entity' => $entity), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'remove', array('entity' => $entity), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'refresh', array('entity' => $entity), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'detach', array('entity' => $entity), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'merge', array('entity' => $entity), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'contains', array('entity' => $entity), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getEventManager', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getConfiguration', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'isOpen', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getUnitOfWork', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getProxyFactory', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'initializeObject', array('obj' => $obj), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'getFilters', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'isFiltersStateClean', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'hasFilters', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return $this->valueHolder7225f->hasFilters();
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

        $instance->initializer2328a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7225f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7225f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7225f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, '__get', ['name' => $name], $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        if (isset(self::$publicProperties05bf1[$name])) {
            return $this->valueHolder7225f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7225f;

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

        $targetObject = $this->valueHolder7225f;
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
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7225f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7225f;
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
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, '__isset', array('name' => $name), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7225f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7225f;
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
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, '__unset', array('name' => $name), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7225f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7225f;
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
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, '__clone', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        $this->valueHolder7225f = clone $this->valueHolder7225f;
    }

    public function __sleep()
    {
        $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, '__sleep', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;

        return array('valueHolder7225f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2328a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2328a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2328a && ($this->initializer2328a->__invoke($valueHolder7225f, $this, 'initializeProxy', array(), $this->initializer2328a) || 1) && $this->valueHolder7225f = $valueHolder7225f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7225f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7225f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
