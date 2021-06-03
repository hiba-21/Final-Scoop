<?php

namespace App\Controller;

use App\Entity\VacanceFermeture;
use App\Form\VacanceFermetureType;
use App\Repository\VacanceFermetureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/vacance/fermeture")
 */
class VacanceFermetureController extends AbstractController
{
    /**
     * @Route("/", name="vacance_fermeture_index", methods={"GET"})
     */
    public function index(Request $request): Response
    {
        $vacanceFermeture = new VacanceFermeture();
        $form = $this->createForm(VacanceFermetureType::class, $vacanceFermeture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vacanceFermeture);
            $entityManager->flush();
        }

        return $this->render('responsable/reglages/VacanceFermeture.html.twig', [
            'vacance_fermeture' => $vacanceFermeture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/vac", name="vacance_fermeture_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $vacanceFermeture = new VacanceFermeture();
        $form = $this->createForm(VacanceFermetureType::class, $vacanceFermeture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vacanceFermeture);
            $entityManager->flush();
        }

        return $this->render('responsable/reglages/VacanceFermeture.html.twig', [
            'vacance_fermeture' => $vacanceFermeture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="vacance_fermeture_show", methods={"GET"})
     */
    public function show(VacanceFermeture $vacanceFermeture): Response
    {
        return $this->render('vacance_fermeture/show.html.twig', [
            'vacance_fermeture' => $vacanceFermeture,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="vacance_fermeture_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, VacanceFermeture $vacanceFermeture): Response
    {
        $form = $this->createForm(VacanceFermetureType::class, $vacanceFermeture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vacance_fermeture_index');
        }

        return $this->render('vacance_fermeture/edit.html.twig', [
            'vacance_fermeture' => $vacanceFermeture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="vacance_fermeture_delete", methods={"DELETE"})
     */
    public function delete(Request $request, VacanceFermeture $vacanceFermeture): Response
    {
        if ($this->isCsrfTokenValid('delete' . $vacanceFermeture->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($vacanceFermeture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vacance_fermeture_index');
    }
}
