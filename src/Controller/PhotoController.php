<?php

namespace App\Controller;

use App\Entity\Comic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

abstract class  PhotoController extends AbstractController
{
    private $session;

    /**
     * PhotoController constructor.
     * @param $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

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
        return $this->redirectToPrevious();
    }

    public function redirectToPrevious()
    {
        $route = $this->session->get('route', []);
        if(!$route)
            $route='index';
        return $this->redirectToRoute($route);
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
        $manager->flush();
        return $this->redirectToPrevious();
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(int $id)
    {
        $manager = $this->getDoctrine()->getManager();
        $comic = $manager->getRepository(Comic::class)->find($id);
        $file = new Filesystem();
        $file->remove('comics/' . $comic->getFilename());
        $manager->remove($comic);
        $manager->flush();
        $manager->flush();
        return $this->redirectToPrevious();
    }
}
