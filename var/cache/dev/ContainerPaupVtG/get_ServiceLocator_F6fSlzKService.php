<?php

namespace ContainerPaupVtG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F6fSlzKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f6fSlzK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f6fSlzK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ClientsRepository' => ['privates', 'App\\Repository\\ClientsRepository', 'getClientsRepositoryService', true],
            'categoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', true],
            'produitsRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'ClientsRepository' => 'App\\Repository\\ClientsRepository',
            'categoriesRepository' => 'App\\Repository\\CategoriesRepository',
            'produitsRepository' => 'App\\Repository\\ProduitsRepository',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
