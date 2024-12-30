<?php

namespace ContainerZ8lDFps;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Maker_Factory_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.maker.factory.generator' shared service.
     *
     * @return \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'FactoryGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'NamespaceGuesser.php';

        $a = ($container->privates['.zenstruck_foundry.chain_manager_registry'] ?? $container->load('get_ZenstruckFoundry_ChainManagerRegistryService'));

        return $container->privates['.zenstruck_foundry.maker.factory.generator'] = new \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryGenerator($a, ($container->services['kernel'] ?? $container->get('kernel', 1)), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.zenstruck_foundry.maker.factory.orm_default_properties_guesser'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_OrmDefaultPropertiesGuesserService'));
            yield 1 => ($container->privates['.zenstruck_foundry.maker.factory.odm_default_properties_guesser'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_OdmDefaultPropertiesGuesserService'));
            yield 2 => ($container->privates['.zenstruck_foundry.maker.factory.doctrine_scalar_fields_default_properties_guesser'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_DoctrineScalarFieldsDefaultPropertiesGuesserService'));
            yield 3 => ($container->privates['.zenstruck_foundry.maker.factory.object_default_properties_guesser'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_ObjectDefaultPropertiesGuesserService'));
        }, 4), ($container->privates['.zenstruck_foundry.maker.factory.factory_class_map'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_FactoryClassMapService')), new \Zenstruck\Foundry\Bundle\Maker\Factory\NamespaceGuesser($a));
    }
}
