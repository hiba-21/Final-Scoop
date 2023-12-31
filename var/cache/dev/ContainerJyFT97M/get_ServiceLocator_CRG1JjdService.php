<?php

namespace ContainerJyFT97M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CRG1JjdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CRG1Jjd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CRG1Jjd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', true],
        ], [
            'mailer' => '?',
        ]);
    }
}
