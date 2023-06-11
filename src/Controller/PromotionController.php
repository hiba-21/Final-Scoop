<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\ProduitsRepository;
use App\Repository\PromotionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/promotion", name="promotion_")
 */

class PromotionController extends AbstractController
{
    /**
     * @Route("/promo", name="promo")
     */
    public function index(PromotionRepository $promotionRepository, ProduitsRepository $produitsRepository): Response
    {
        return $this->render('respo/promotion/index.html.twig', [
            'promotions' => $promotionRepository->findAll(),
            'produits' => $produitsRepository->findAll()
        ]);
    }
    /**
     * @Route("/ajoutPromotion", name="ajout_promotion")
     */
    public function ajoutpromo(Request $request): Response
    {
        $promo = new Promotion;
        $form = $this->createForm(PromotionType::class, $promo);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            $promo->setUsers($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($promo);
            $em->flush();
            return $this->redirectToRoute("promotion_promo");
        }
        return $this->render('respo/promotion/ajout.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/supprimer/{id}", name="supprimer")
     */
    public function supprimer(Promotion $promotion): Response
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();

        $this->addFlash('message', 'promotion supprimée avec succés');
        return $this->redirectToRoute('promotion');
    }
    /**
     * @Route("/modifier/{id}", name="modifier")
     */
    public function modifier(Promotion $promotion, Request $request): Response

    {

        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            $promotion->setUsers($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();
            return $this->redirectToRoute("promotion_promo");
        }
        return $this->render('respo/promotion/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
