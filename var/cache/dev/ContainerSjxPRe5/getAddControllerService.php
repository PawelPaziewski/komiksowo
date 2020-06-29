<?php

namespace ContainerSjxPRe5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AddController' shared autowired service.
     *
     * @return \App\Controller\AddController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\AddController.php';

        $container->services['App\\Controller\\AddController'] = $instance = new \App\Controller\AddController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AddController', $container));

        return $instance;
    }
}