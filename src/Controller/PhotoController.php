<?php

namespace App\Controller;

use App\Entity\Comic;
use App\Service\RedirectToPrevious;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

abstract class PhotoController extends AbstractController
{
    private $redirectService;

    /**
     * PhotoController constructor.
     * @param $redirectService
     */
    public function __construct(RedirectToPrevious $redirectService)
    {
        $this->redirectService = $redirectService;
    }

    /**
     * @Route("/like/{id}", name="like")
     * @param int $id
     * @return RedirectResponse
     */
    public function like(int $id)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $manager = $this->getDoctrine()->getManager();
        $comic = $manager->getRepository(Comic::class)->find($id);
        $comic->addLikesBy($this->getUser());
        $manager->persist($comic);
        $manager->flush();
        return $this->redirectToRoute('index');
//        return $this->redirectService->redirectToPrevious();
    }

    /**
     * @Route("/unlike/{id}", name="unlike")
     * @param int $id
     * @return RedirectResponse
     */
    public function unlike(int $id)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $manager = $this->getDoctrine()->getManager();
        $comic = $manager->getRepository(Comic::class)->find($id);
        $comic->removeLikesBy($this->getUser());
        $manager->persist($comic);
        $manager->flush();
        return $this->redirectToRoute('index');
//        return $this->redirectService->redirectToPrevious();
    }

    /**
     * @Route("/delete/{id}", name="delete")
     * @param int $id
     * @return RedirectResponse
     */
    public function delete(int $id)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $manager = $this->getDoctrine()->getManager();
        $comic = $manager->getRepository(Comic::class)->find($id);
        if ($comic->getUser() == $this->getUser()) {
            try {
                $file = new Filesystem();
                $file->remove('comics/' . $comic->getFilename());
                $manager->remove($comic);
                $manager->flush();
                $this->addFlash('success', 'Pomyślnie usunięto zdjęcie');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Wystąpił nieoczekiwany błąd');
            }
        } else
            $this->addFlash('error', 'Nie usunięto zdjęcia ponieważ nie jesteś jego właścicielem');
        return $this->redirectToRoute('index');
//        return $this->redirectService->redirectToPrevious();
    }
}
