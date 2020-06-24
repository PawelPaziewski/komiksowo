<?php

namespace App\Controller;

use App\Entity\Comic;
use App\Entity\Like;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends PhotoController
{
    /**
     * @Route("/index", name="index")
     * @Route("/")
     */
    public function index()
    {
        $manager=$this->getDoctrine()->getManager();
        $latest = $manager ->getRepository(Comic::class)->findAllSortedByUploadedDate();
        return $this->render('index/index.html.twig', ['comics' => $latest]);
    }

}
