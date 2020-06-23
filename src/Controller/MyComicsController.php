<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyComicsController extends AbstractController
{
    /**
     * @Route("/my/comics", name="my_comics")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();
        $myComics = $manager->getRepository(Comic::class)->findBy(['user'=>$this->getUser()]);
        return $this->render('my_comics/index.html.twig', ['mycomics' => $myComics]);
    }
}
