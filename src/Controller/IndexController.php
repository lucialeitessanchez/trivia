<?php

namespace App\Controller;

use App\Entity\Pregunta;
use App\Entity\Respuesta;
use App\Form\RespuestaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/')]
class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        return $this->render('cuestionario/municipioInput.html.twig', [
        ]);
    }

    #[Route('/cuestionario', name: 'app_cuestionario', methods: ['GET'])]
    public function cuestionario(EntityManagerInterface $entityManager,Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();

        $municipio=$request->get('InputMunicipio');
        $preguntas=$em->getRepository(Pregunta::class)->findAll();
        return $this->render('cuestionario/cuestionario.html.twig', array(
            'municipio' => $municipio,
            'preguntas' => $preguntas
        ));
    }

    #[Route('/cuestionario/list', name: 'app_cuestionario_list', methods: ['GET'])]
    public function cuestionarioList(EntityManagerInterface $entityManager,Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();

        $municipio=$request->get('InputMunicipio');
        $datos = $preguntas=$em->getRepository(Pregunta::class)->findAll();
        $respuesta = [];
        foreach($datos as $pregunta) {
            $respuesta[] = [
                            'medicion' => $pregunta->getParametroMedicion(),
                            'rojo' => $pregunta->getRojo(),
                            'amarillo' => $pregunta->getAmarillo(),
                            'verde' => $pregunta -> getVerde()
                            ];
        } 
        return new JsonResponse($respuesta);
    }

}
