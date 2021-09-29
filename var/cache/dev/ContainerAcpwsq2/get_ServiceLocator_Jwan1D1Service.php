<?php

namespace ContainerAcpwsq2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jwan1D1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jwan1D1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jwan1D1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\EpreuveRepository', 'getEpreuveRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\EpreuveRepository',
        ]);
    }
}