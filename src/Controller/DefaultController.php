<?php

// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

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
        return $this->render('dataTable.html.twig', []);
    }

     /**
     * @Route("/payment/edit/{id}", name="payment_edit", methods={"POST"})
     */
    // public function editPayment(Request $request, int $id): JsonResponse
    // {
    //     // Aquí implementarías la lógica para editar el pago.
    //     // Por ejemplo, obtener los datos del pago por su ID, actualizarlos y guardar los cambios.

    //     // Retornar una respuesta JSON para la solicitud AJAX.
    //     return new JsonResponse(['status' => 'success', 'message' => 'Pago editado correctamente.']);
    // }

    /**
     * @Route("/payment/delete/{id}", name="payment_delete", methods={"POST"})
     */
    // public function deletePayment(int $id): JsonResponse
    // {
    //     // Aquí implementarías la lógica para eliminar el pago.
    //     // Por ejemplo, encontrar el pago por su ID y eliminarlo de la base de datos.

    //     // Retornar una respuesta JSON para la solicitud AJAX.
    //     return new JsonResponse(['status' => 'success', 'message' => 'Pago eliminado correctamente.']);
    // }
}