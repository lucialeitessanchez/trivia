<?php

namespace App\Controller;

use App\Entity\Respuesta;
use App\Form\RespuestaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/respuesta')]
class RespuestaController extends AbstractController
{
    #[Route('/', name: 'app_respuesta_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $respuestas = $entityManager
            ->getRepository(Respuesta::class)
            ->findAll();

        return $this->render('respuesta/index.html.twig', [
            'respuestas' => $respuestas,
        ]);
    }

    #[Route('/new', name: 'app_respuesta_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $respuestum = new Respuesta();
        $form = $this->createForm(RespuestaType::class, $respuestum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($respuestum);
            $entityManager->flush();

            return $this->redirectToRoute('app_respuesta_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('respuesta/new.html.twig', [
            'respuestum' => $respuestum,
            'form' => $form,
        ]);
    }

    #[Route('/{idrespuesta}', name: 'app_respuesta_show', methods: ['GET'])]
    public function show(Respuesta $respuestum): Response
    {
        return $this->render('respuesta/show.html.twig', [
            'respuestum' => $respuestum,
        ]);
    }

    #[Route('/{idrespuesta}/edit', name: 'app_respuesta_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Respuesta $respuestum, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RespuestaType::class, $respuestum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_respuesta_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('respuesta/edit.html.twig', [
            'respuestum' => $respuestum,
            'form' => $form,
        ]);
    }

    #[Route('/{idrespuesta}', name: 'app_respuesta_delete', methods: ['POST'])]
    public function delete(Request $request, Respuesta $respuestum, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$respuestum->getIdrespuesta(), $request->request->get('_token'))) {
            $entityManager->remove($respuestum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_respuesta_index', [], Response::HTTP_SEE_OTHER);
    }
}
