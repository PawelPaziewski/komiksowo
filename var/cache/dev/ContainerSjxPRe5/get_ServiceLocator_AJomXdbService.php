<?php

namespace ContainerSjxPRe5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AJomXdbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aJomXdb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aJomXdb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\LoginAuthenticator', 'getLoginAuthenticatorService', true],
            'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'authenticator' => 'App\\Security\\LoginAuthenticator',
            'guardHandler' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}
