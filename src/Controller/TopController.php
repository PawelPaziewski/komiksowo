<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class TopController extends PhotoController
{
    private $session;

    /**
     * TopController constructor.
     * @param $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/top", name="top")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();
        $top = $manager->getRepository(Comic::class)->findAllSortedByLikes();
        $this->session->set('route', 'top');
        return $this->render('top/index.html.twig', ['comics' => $top]);
    }
}
