<?php

namespace App\Controller;

use App\Entity\Comic;
use App\Entity\Like;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     * @Route("/")
     */
    public function index()
    {
        $manager=$this->getDoctrine()->getManager();
        $latest = $manager ->getRepository(Comic::class)->findAllSortedByUploadedDate();
        $likes = $this->getDoctrine()->getManager()->getRepository(Like::class)->findAll();
        return $this->render('index/index.html.twig', ['comics' => $latest, 'likes'=>$likes]);
    }

}
