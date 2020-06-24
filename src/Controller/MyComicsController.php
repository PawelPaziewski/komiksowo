<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MyComicsController extends PhotoController
{
    private $session;

    /**
     * MyComicsController constructor.
     * @param $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
    /**
     * @Route("/my/comics", name="my_comics")
     */
    public function index()
    {
        $this->denyAccessUnlessGranted('ROlE_USER');
        $manager = $this->getDoctrine()->getManager();
        $myComics = $manager->getRepository(Comic::class)->findBy(['user'=>$this->getUser()]);
        $this->session->set('route', 'my_comics');
        return $this->render('my_comics/index.html.twig', ['comics' => $myComics]);
    }
}
