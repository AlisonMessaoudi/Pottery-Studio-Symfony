<?php

namespace ContainerWAKhUx8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciceControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ExerciceController' shared autowired service.
     *
     * @return \App\Controller\ExerciceController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ExerciceController'] = $instance = new \App\Controller\ExerciceController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ExerciceController', $container));

        return $instance;
    }
}
