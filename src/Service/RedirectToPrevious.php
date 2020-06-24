<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RedirectToPrevious
{
    private $session;
    private $urlGenerator;

    /**
     * RedirectToPrevious constructor.
     * @param SessionInterface $session
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(SessionInterface $session, UrlGeneratorInterface $urlGenerator)
    {
        $this->session = $session;
        $this->urlGenerator = $urlGenerator;
    }

    public function redirectToPrevious()
    {
        $route = $this->session->get('route', []);
        if (!$route)
            $route = 'index';
        return new RedirectResponse($this->urlGenerator->generate($route));
    }
}