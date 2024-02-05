<?php

// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(): Response
    {
        // return $this->render('index.html.twig', []);
        // return $this->render('fileUpload.html.twig', []);
        // return $this->render('fileSigning.html.twig', []);
        // return $this->render('moduloCaja1.html.twig', []);
        // return $this->render('moduloCaja2.html.twig', []);

        // $actos = [
        //     ['id' => 1, 'nombre' => 'Acto 1', 'registro' => 'Registro 1', 'valorización' => 100],
        // ];
        // return $this->render('mantenedorActos1.html.twig', [
        //     'actos' => $actos,
        // ]);

        // return $this->render('mantenedorActos2.html.twig', []);

        // $pagos = [
        //     ['idOrdenDeTrabajo' => 1, 'MedioDePago' => 'Efectivo', 'montoPago' => '$343'],
        // ];
        // return $this->render('cierreDeCaja.html.twig', [
        //     'pagos' => $pagos,
        // ]);

        // return $this->render('trabajoMatriceria.html.twig', []);
        return $this->render('calificacionJuridica.html.twig', []);

    }
}