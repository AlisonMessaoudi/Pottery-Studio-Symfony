<?php

namespace Container023H5nO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZSz72t5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZSz72t5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZSz72t5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactProRepository' => ['privates', 'App\\Repository\\ContactProRepository', 'getContactProRepositoryService', true],
        ], [
            'contactProRepository' => 'App\\Repository\\ContactProRepository',
        ]);
    }
}
