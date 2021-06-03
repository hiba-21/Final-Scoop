<?php

namespace App\Controller;

use App\Entity\Clandar;
use App\Form\ClandarType;
use App\Repository\ClandarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/clandar")
 */
class ClandarController extends AbstractController
{
    /**
     * @Route("/", name="clandar_index", methods={"GET"})
     */
    public function index(ClandarRepository $clandarRepository): Response
    {
        return $this->render('clandar/index.html.twig', [
            'clandars' => $clandarRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="clandar_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $clandar = new Clandar();
        $form = $this->createForm(ClandarType::class, $clandar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($clandar);
            $entityManager->flush();

            return $this->redirectToRoute('clandar_index');
        }

        return $this->render('clandar/new.html.twig', [
            'clandar' => $clandar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="clandar_show", methods={"GET"})
     */
    public function show(Clandar $clandar): Response
    {
        return $this->render('clandar/show.html.twig', [
            'clandar' => $clandar,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="clandar_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Clandar $clandar): Response
    {
        $form = $this->createForm(ClandarType::class, $clandar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('clandar_index');
        }

        return $this->render('clandar/edit.html.twig', [
            'clandar' => $clandar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="clandar_delete", methods={"POST"})
     */
    public function delete(Request $request, Clandar $clandar): Response
    {
        if ($this->isCsrfTokenValid('delete' . $clandar->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($clandar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('clandar_index');
    }
}
