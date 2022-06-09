<?php

namespace App\Controller;

use App\Entity\Pregunta;
use App\Form\PreguntaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pregunta')]
class PreguntaController extends AbstractController
{
    #[Route('/', name: 'app_pregunta_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $preguntas = $entityManager
            ->getRepository(Pregunta::class)
            ->findAll();

        return $this->render('pregunta/index.html.twig', [
            'preguntas' => $preguntas,
        ]);
    }

    #[Route('/new', name: 'app_pregunta_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $preguntum = new Pregunta();
        $form = $this->createForm(PreguntaType::class, $preguntum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($preguntum);
            $entityManager->flush();

            return $this->redirectToRoute('app_pregunta_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pregunta/new.html.twig', [
            'preguntum' => $preguntum,
            'form' => $form,
        ]);
    }

    #[Route('/{idpregunta}/show', name: 'app_pregunta_show', methods: ['GET'])]
    public function show(Pregunta $preguntum): Response
    {
        return $this->render('pregunta/show.html.twig', [
            'preguntum' => $preguntum,
        ]);
    }

    #[Route('/{idpregunta}/edit', name: 'app_pregunta_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pregunta $preguntum, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PreguntaType::class, $preguntum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pregunta_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pregunta/edit.html.twig', [
            'preguntum' => $preguntum,
            'form' => $form,
        ]);
    }

    #[Route('/{idpregunta}/delete', name: 'app_pregunta_delete', methods: ['POST'])]
    public function delete(Request $request, Pregunta $preguntum, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$preguntum->getIdpregunta(), $request->request->get('_token'))) {
            $entityManager->remove($preguntum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pregunta_index', [], Response::HTTP_SEE_OTHER);
    }
}
