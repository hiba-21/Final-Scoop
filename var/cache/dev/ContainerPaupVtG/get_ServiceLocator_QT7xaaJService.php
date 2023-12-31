<?php

namespace ContainerPaupVtG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QT7xaaJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qT7xaaJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qT7xaaJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clientsRepository' => ['privates', 'App\\Repository\\ClientsRepository', 'getClientsRepositoryService', true],
            'produitsRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'clientsRepository' => 'App\\Repository\\ClientsRepository',
            'produitsRepository' => 'App\\Repository\\ProduitsRepository',
            'session' => '?',
        ]);
    }
}
