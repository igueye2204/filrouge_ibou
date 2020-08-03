<?php

namespace ContainerUGxyNwF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_RespondService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.respond' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\RespondListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/RespondListener.php';

        return $container->privates['api_platform.listener.view.respond'] = new \ApiPlatform\Core\EventListener\RespondListener(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}