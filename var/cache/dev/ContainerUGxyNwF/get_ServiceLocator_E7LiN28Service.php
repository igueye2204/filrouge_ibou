<?php

namespace ContainerUGxyNwF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E7LiN28Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E7LiN28' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E7LiN28'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ApprenantController::getApprenant' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\ApprenantController::updateApprenant' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\FormateursController::getFormateur' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ApprenantController:getApprenant' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\ApprenantController:updateApprenant' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\FormateursController:getFormateur' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ApprenantController::getApprenant' => '?',
            'App\\Controller\\ApprenantController::updateApprenant' => '?',
            'App\\Controller\\FormateursController::getFormateur' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ApprenantController:getApprenant' => '?',
            'App\\Controller\\ApprenantController:updateApprenant' => '?',
            'App\\Controller\\FormateursController:getFormateur' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
