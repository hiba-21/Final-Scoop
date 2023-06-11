<?php

namespace App\Controller;

use App\Repository\ClientsRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabClientsController extends AbstractController
{
    /**
     * @Route("/tab/clients", name="tab_clients")
     */
    public function index(ClientsRepository $ClientsRepository): Response
    {
        return $this->render('tab_clients/index.html.twig', [
            'Clients' => $ClientsRepository->findAll()
        ]);
    }
}
