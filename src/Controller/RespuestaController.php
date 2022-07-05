<?php

namespace App\Controller;

use App\Entity\Formulario;
use App\Entity\Respuesta;
use App\Form\RespuestaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Persistence\ManagerRegistry;

use App\Repository\PreguntaRepository;
use DateTime;

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

    /**
     * Registra una instacia de respuesta
     * 
     * @param Request $request Solicitud
     * @param EntityManagerInterface $entityManager Entity Manager
     * @param PreguntaRepository $preguntaRepository Repositorio de preguntas
     * @param ManagerRegistry $doctrine 
     * 
     * @return Response Objeto JsonResponse
     */
    #[Route('/nuevo', name: 'app_respuesta_nuevo', methods: ['GET','POST'])]
    public function nuevo(Request $request, EntityManagerInterface $entityManager,PreguntaRepository $preguntaRepository,ManagerRegistry $doctrine): Response
    {

        $respuestaN=new Respuesta(); //creo una nueva clase de respuesta, para insertar lo que obtengo cuando aprieta siguiente

        $datos= $request->getContent();//objeto de tipo json con el contenido de la pregunta,respuesta seleccionada y municipio

         
//decodifico el objeto json por partes para insertarlo 
            $objeto= json_decode($datos);
            


            
            //tengo todas las partes del objeto en variables
            $medicion=$objeto->medicion; //le digo al objeto que me de lo que tiene como atributo en medicion
            $respuesSeleccionada=$objeto->respuesta; 
            $municipio=$objeto->municipio;
            $fecha = new \DateTime();
            

            //base de datos
            $pregunta=$preguntaRepository->findAllParameter($medicion); //tengo la pregunta en un array 
            $objeto=$pregunta[0]; //aca tengo el objeto propiamentedicho
            
        
            //persistencia de datos
        
            switch ($respuesSeleccionada){  //comparo con que pregunta es y guardo segun el color
                case ($objeto->getRojo()):
                    $respuestaN->setColor('rojo');
                   
                    break;
                case ($objeto->getAmarillo()):
                   $respuestaN->setColor('amarillo');
                   
                   break;
                case ($objeto->getVerde()):
                
                    $respuestaN->setColor('verde');
                    break;        
            }


            $idPregunta=$objeto->getIdpregunta(); //del objeto traido en la db obtengo el id de la pregunta y lo guardo- el que me coincide con la pregunta
            $formulario=$doctrine->getRepository(Formulario::class)->findAll(); //porque se que hay uno por ahora, esto modificar para saber el que esta activo
            $formulario=$formulario[0];

            $respuestaN->setParametromedicion($medicion);
            $respuestaN->setFecha($fecha);
            $respuestaN->setMunicipio($municipio);
            $respuestaN->setIdpregunta($objeto); //le paso el objeto completo porque asi lo necesita
            $respuestaN->setIdformulario($formulario);
            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($respuestaN);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

        return $this->json(['status'=>'ok']);
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
