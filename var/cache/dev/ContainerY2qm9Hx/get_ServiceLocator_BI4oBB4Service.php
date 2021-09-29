<?php

namespace ContainerY2qm9Hx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BI4oBB4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BI4oBB4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BI4oBB4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\AthleteRepository', 'getAthleteRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\AthleteRepository',
        ]);
    }
}
