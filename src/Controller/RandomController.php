<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends PhotoController
{
        private $session;

        /**
         * RandomController constructor.
         * @param $session
         */
        public function __construct(SessionInterface $session)
        {
            $this->session = $session;
        }

    /**
     * @Route("/random", name="random")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();
        $myComics = $manager->getRepository(Comic::class)->findAll();
        shuffle($myComics);
        $randomComic = array_pop($myComics);
        $this->session->set('route', 'random');
        $comic[] = $randomComic;
        return $this->render('random/index.html.twig', ['comics' => $comic]);
    }
}
