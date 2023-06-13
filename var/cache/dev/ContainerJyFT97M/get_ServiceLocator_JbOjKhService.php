<?php

namespace ContainerJyFT97M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JbOjKhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jbOj_kh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jbOj_kh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', true],
            'infoBoutiqueRepository' => ['privates', 'App\\Repository\\InfoBoutiqueRepository', 'getInfoBoutiqueRepositoryService', true],
            'produitsRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
            'supplementsRepository' => ['privates', 'App\\Repository\\SupplementsRepository', 'getSupplementsRepositoryService', true],
        ], [
            'categoriesRepository' => 'App\\Repository\\CategoriesRepository',
            'infoBoutiqueRepository' => 'App\\Repository\\InfoBoutiqueRepository',
            'produitsRepository' => 'App\\Repository\\ProduitsRepository',
            'supplementsRepository' => 'App\\Repository\\SupplementsRepository',
        ]);
    }
}
