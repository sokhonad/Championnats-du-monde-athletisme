<?php

namespace ContainerAcpwsq2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEpreuveTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EpreuveType' shared autowired service.
     *
     * @return \App\Form\EpreuveType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EpreuveType.php';

        return $container->privates['App\\Form\\EpreuveType'] = new \App\Form\EpreuveType();
    }
}
