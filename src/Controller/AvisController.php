<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\User;
use App\Form\CommentType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvisController extends AbstractController
{

    /**
     *  @Route("/avis1",name="avis1")
     *  @param Request $request
     * @return Response
     */

    public function new(Request $request): Response
    {

        $Comment = new Comment();
        $form = $this->createForm(CommentType::class, $Comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $Comment->setCreateAt(new DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($Comment);
            $em->flush();
        }

        return $this->render('home/avis1.html.twig', [
            'form' => $form->createView(),
            'comment' => $Comment,

        ]);
    }
}
