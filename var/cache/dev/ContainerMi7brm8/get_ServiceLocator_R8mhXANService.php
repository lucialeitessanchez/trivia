<?php

namespace ContainerMi7brm8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R8mhXANService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R8mhXAN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R8mhXAN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'preguntum' => ['privates', '.errored..service_locator.R8mhXAN.App\\Entity\\Pregunta', NULL, 'Cannot autowire service ".service_locator.R8mhXAN": it references class "App\\Entity\\Pregunta" but no such service exists.'],
        ], [
            'preguntum' => 'App\\Entity\\Pregunta',
        ]);
    }
}
