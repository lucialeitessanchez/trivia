<?php

namespace App\Controller;

use App\Entity\Pregunta;
use App\Entity\Respuesta;
use App\Form\RespuestaType;
use Doctrine\ORM\EntityManagerInterface;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PreguntaRepository;
use App\Repository\RespuestaRepository;


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

    #[Route('/semaforo', name: 'app_semaforo', methods: ['GET'])]
    public function semaforo(EntityManagerInterface $entityManager): Response
    {
      //  $tupla= new stdClass();
      $em = $this->getDoctrine()->getManager();

      //municipio=$request->get('InputMunicipio');
        $preguntas=$em->getRepository(Pregunta::class);
        //$preguntas = $entityManager->getRepository(Pregunta::class);
        $respuestas = $em->getRepository(Respuesta::class)->findAll();
       // $ids=$respuestas->getIdpregunta();
        $r=$preguntas->find(2);
        
        return $this->render('cuestionario/semaforo.html.twig', array('obj' => $r));
    }
}
