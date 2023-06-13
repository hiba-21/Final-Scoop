<?php

namespace ContainerJyFT97M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CLTJDJsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CLTJDJs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CLTJDJs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'supplementsRepository' => ['privates', 'App\\Repository\\SupplementsRepository', 'getSupplementsRepositoryService', true],
        ], [
            'supplementsRepository' => 'App\\Repository\\SupplementsRepository',
        ]);
    }
}
