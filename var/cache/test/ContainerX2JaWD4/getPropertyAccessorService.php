<?php

namespace ContainerX2JaWD4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyAccessorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyReadInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyWriteInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/ConstructorArgumentTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/ReflectionExtractor.php';

        $a = ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));

        return $container->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(3, false, ($container->privates['cache.property_access'] ?? ($container->privates['cache.property_access'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false))), true, $a, $a);
    }
}
