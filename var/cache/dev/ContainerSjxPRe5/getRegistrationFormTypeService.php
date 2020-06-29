<?php

namespace ContainerSjxPRe5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegistrationFormType' shared autowired service.
     *
     * @return \App\Form\RegistrationFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\RegistrationFormType.php';

        return $container->privates['App\\Form\\RegistrationFormType'] = new \App\Form\RegistrationFormType();
    }
}
