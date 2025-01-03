<?php

namespace ContainerZ8lDFps;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_GlobalStateRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.zenstruck_foundry.global_state_registry' shared service.
     *
     * @return \Zenstruck\Foundry\Test\GlobalStateRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Test'.\DIRECTORY_SEPARATOR.'GlobalStateRegistry.php';

        return $container->services['.zenstruck_foundry.global_state_registry'] = new \Zenstruck\Foundry\Test\GlobalStateRegistry();
    }
}
