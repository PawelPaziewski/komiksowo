<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class  PhotoController extends AbstractController
{
    /**
     * @Route("/like/{id}", name="like")
     */
    public function like(int $id)
    {
        $manager = $this->getDoctrine()->getManager();
        $comic = $manager->getRepository(Comic::class)->find($id);
        $comic->addLikesBy($this->getUser());
        $manager->persist($comic);
        $manager->flush();
        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/unlike/{id}", name="unlike")
     */
    public function unlike(int $id)
    {
        $manager = $this->getDoctrine()->getManager();
        $comic = $manager->getRepository(Comic::class)->find($id);
        $comic->removeLikesBy($this->getUser());
        $manager->persist($comic);
        $manager->flush();
        return $this->redirectToRoute('index');
    }
}
