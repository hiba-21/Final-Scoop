<?php

namespace ContainerPaupVtG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F9C7VtYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f9C7VtY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f9C7VtY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pannierRepository' => ['privates', 'App\\Repository\\PannierRepository', 'getPannierRepositoryService', true],
        ], [
            'pannierRepository' => 'App\\Repository\\PannierRepository',
        ]);
    }
}
