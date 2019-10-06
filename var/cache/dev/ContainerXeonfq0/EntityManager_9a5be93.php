<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8b431 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer495aa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdc5f6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getConnection', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getMetadataFactory', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getExpressionBuilder', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'beginTransaction', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getCache', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getCache();
    }

    public function transactional($func)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'transactional', array('func' => $func), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->transactional($func);
    }

    public function commit()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'commit', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->commit();
    }

    public function rollback()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'rollback', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getClassMetadata', array('className' => $className), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'createQuery', array('dql' => $dql), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'createNamedQuery', array('name' => $name), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'createQueryBuilder', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'flush', array('entity' => $entity), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'clear', array('entityName' => $entityName), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->clear($entityName);
    }

    public function close()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'close', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->close();
    }

    public function persist($entity)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'persist', array('entity' => $entity), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'remove', array('entity' => $entity), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'refresh', array('entity' => $entity), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'detach', array('entity' => $entity), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'merge', array('entity' => $entity), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getRepository', array('entityName' => $entityName), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'contains', array('entity' => $entity), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getEventManager', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getConfiguration', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'isOpen', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getUnitOfWork', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getProxyFactory', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'initializeObject', array('obj' => $obj), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'getFilters', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'isFiltersStateClean', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'hasFilters', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return $this->valueHolder8b431->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer495aa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8b431) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8b431 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8b431->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, '__get', ['name' => $name], $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        if (isset(self::$publicPropertiesdc5f6[$name])) {
            return $this->valueHolder8b431->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b431;

            $backtrace = debug_backtrace(false);
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

        $targetObject = $this->valueHolder8b431;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b431;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8b431;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, '__isset', array('name' => $name), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b431;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8b431;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, '__unset', array('name' => $name), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b431;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8b431;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, '__clone', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        $this->valueHolder8b431 = clone $this->valueHolder8b431;
    }

    public function __sleep()
    {
        $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, '__sleep', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;

        return array('valueHolder8b431');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer495aa = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer495aa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer495aa && ($this->initializer495aa->__invoke($valueHolder8b431, $this, 'initializeProxy', array(), $this->initializer495aa) || 1) && $this->valueHolder8b431 = $valueHolder8b431;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8b431;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder8b431;
    }


}
