<?php

namespace ContainerUGxyNwF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Guard_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.guard.api' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), [0 => 'login', 1 => 'api']);
        $a->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

        return $container->privates['security.authentication.listener.guard.api'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), 'api', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $container->load('getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService'));
        }, 1), ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
