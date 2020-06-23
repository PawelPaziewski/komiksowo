<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends AbstractController
{
    /**
     * @Route("/random", name="random")
     */
    public function index()
    {
        return $this->render('random/index.html.twig', [
            'controller_name' => 'RandomController',
        ]);
    }
}
