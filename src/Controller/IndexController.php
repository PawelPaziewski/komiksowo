<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends PhotoController
{
    private $session;

    /**
     * IndexController constructor.
     * @param $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/index", name="index")
     * @Route("/", name="in")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();
        $latest = $manager->getRepository(Comic::class)->findAllSortedByUploadedDate();
        $this->session->set('route', 'index');
        return $this->render('index/index.html.twig', ['comics' => $latest]);
    }
}
