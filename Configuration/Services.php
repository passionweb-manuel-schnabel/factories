<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use Passionweb\Factories\Controller\FactoryController;
use Passionweb\Factories\Factory\CustomLanguageFactory;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void {
    $services = $containerConfigurator->services();
    $services->defaults()
        ->private()
        ->autowire()
        ->autoconfigure();

    $services->load('Passionweb\\Factories\\', __DIR__ . '/../Classes/')
        ->exclude([
            __DIR__ . '/../Classes/Domain/Model',
        ]);

    /**
     * Use a factory based on the existing
     * TYPO3 class "ExtensionConfiguration"
     */
    $services->set('ExtConf.factories', 'array')
        ->factory(
            [
                service(ExtensionConfiguration::class),
                'get'
            ]
        )
        ->args([
            'factories'
        ]);

    /**
     * Use a factory based on the
     * custom class "CustomLanguageFactory"
     */
    $services->set('CustomLanguages', 'array')
        ->factory(
            [
                service(CustomLanguageFactory::class),
                'getCustomLanguages'
            ]
        );


    $services->set(FactoryController::class)
        ->arg('$extConf', service('ExtConf.factories'))
        ->arg('$customLanguages', service('CustomLanguages'));
};
