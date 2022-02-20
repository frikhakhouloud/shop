<?php

namespace ContainerFEQzHbY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YTeQULDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yTeQULD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yTeQULD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AchatController::save' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\AuthController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\AuthController::register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\PanierController::panier' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AchatController:save' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\AuthController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\AuthController:register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\PanierController:panier' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AchatController::save' => '?',
            'App\\Controller\\AuthController::login' => '?',
            'App\\Controller\\AuthController::register' => '?',
            'App\\Controller\\PanierController::panier' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AchatController:save' => '?',
            'App\\Controller\\AuthController:login' => '?',
            'App\\Controller\\AuthController:register' => '?',
            'App\\Controller\\PanierController:panier' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}