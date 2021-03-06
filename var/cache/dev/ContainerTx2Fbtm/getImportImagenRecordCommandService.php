<?php

namespace ContainerTx2Fbtm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportImagenRecordCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\ImportImagenRecordCommand' shared autowired service.
     *
     * @return \App\Command\ImportImagenRecordCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/ImportImagenRecordCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Http/ImagenApiClientInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Http/ImagenApiClient.php';

        $container->privates['App\\Command\\ImportImagenRecordCommand'] = $instance = new \App\Command\ImportImagenRecordCommand(new \App\Http\ImagenApiClient(($container->privates['http_client'] ?? $container->load('getHttpClientService')), $container->getEnv('API_KEY'), $container->getEnv('SECRET_ACCESS_KEY')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));

        $instance->setName('app:import-imagen-record');

        return $instance;
    }
}
