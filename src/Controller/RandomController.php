<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends AbstractController
{
    /**
     * @Route("/random", name="random")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();
        $myComics = $manager->getRepository(Comic::class)->findAll();
        shuffle($myComics);
        $randomComic = array_pop($myComics);
        return $this->render('random/index.html.twig', ['randcomics' => $randomComic]);
    }
}
