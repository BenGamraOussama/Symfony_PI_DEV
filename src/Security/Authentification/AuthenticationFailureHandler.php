<?php

namespace App\Security\Authentification;

use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;

class AuthenticationFailureHandler implements AuthenticationFailureHandlerInterface
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): RedirectResponse
    {
        if ($exception instanceof \App\Security\Exception\SuspendedException) {
            return new RedirectResponse($this->router->generate('app_account_suspended'));
        }

        // Default behavior if it's another kind of exception
        return new RedirectResponse($this->router->generate('app_login'));
    }
}
