<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Component\Routing\Annotation\Route;

class TopController extends PhotoController
{
    /**
     * @Route("/top", name="top")
     */
    public function index()
    {
        $manager = $this->getDoctrine()->getManager();
        $top = $manager->getRepository(Comic::class)->findAllSortedByLikes();

        return $this->render('top/index.html.twig', ['comics' => $top]);
    }
}
