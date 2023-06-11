<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Pannier;
use App\Form\CommandeType;
use App\Repository\PannierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(PannierRepository $pannierRepository): Response
    {
        return $this->render('responsable/dashboard/commands.html.twig', [
            'cmd' => $pannierRepository->findAll()
        ]);
    }
    /**
     * @Route("/aa/{id}", name="aa")
     */
    public function aa(Pannier $pannier)
    {
        $pannier->setActiver(($pannier->getActiver()) ? false : true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($pannier);
        $em->flush();
        return new Response("true");
    }
    /**
     * @Route("/prepare/{id}", name="prepare")
     */
    public function prepare(Pannier $pannier)
    {
        $pannier->setPrepare(($pannier->getPrepare()) ? false : true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($pannier);
        $em->flush();
        return new Response("true");
    }
}
