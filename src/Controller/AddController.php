<?php

namespace App\Controller;

use App\Entity\Comic;
use App\Entity\User;
use App\Form\AddComicType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $form = $this->createForm(AddComicType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($this->getUser()) {
                /** @var UploadedFile $comicFileName */
                $comicFileName = $form->get('filename')->getData();
                if ($comicFileName) {
                    try {
                        $newFileName = uniqid().'.'.$comicFileName->guessExtension();
                        $comicFileName->move('comics', $newFileName);

                        $entityComics = new Comic();
                        $entityComics->setTitle($form->get('title')->getData());
                        $entityComics->setFilename($newFileName);
                        $entityComics->setUploadedDate(new \DateTime());
                        $entityComics->setUser($this->getUser());

                        $em->persist($entityComics);
                        $em->flush();
                        $this->addFlash('success','Dodano komiks!');
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Wystąpił nieoczekiwany błąd!');
                    }
                }
            }
        }

        return $this->render('add/index.html.twig', [
            'addComic' => $form->createView(),
        ]);
    }
}
