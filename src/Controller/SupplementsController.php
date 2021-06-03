<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Supplements;
use App\Entity\Img;
use App\Repository\SupplementsRepository;
use App\Form\SupplementsType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;



class SupplementsController extends AbstractController
{
    /**
     * @Route("/supplements", name="supplements")
     */
    public function index(SupplementsRepository $supplementsRepository): Response
    {
        return $this->render('respo/supplements/index.html.twig', [
            'supplements' => $supplementsRepository->findAll()
        ]);
    }
    /**
     * @Route("/activer/{id}", name="activer")
     */
    public function activer(Supplements $supplements): Response
    {
       $supplements->setActive(($supplements->getActive())?false:true);
       $em = $this->getDoctrine()->getManager();
       $em->persist($supplements);
       $em->flush();

       return new Response("true"); 
    }
    /**
     * @Route("/supprimer/{id}", name="supprimer")
     */
    public function supprimer(Supplements $supplements): Response
    {
       
       $em = $this->getDoctrine()->getManager();
       $em->remove($supplements);
       $em->flush();
       
       $this->addFlash('message', 'supplement supprimée avec succés');
       return $this->redirectToRoute('supplements');
    }
     /**
     * @Route("/ajoutsupplement", name="ajout_supplement")
     */
    public function ajoutsupplement(Request $request): Response

    {
        $supplements = new Supplements;
        $form = $this->createForm(supplementsType::class, $supplements);
        $form->handleRequest($request);

        //enregistrer les cordonnées du formulaire dans la base et l'afficher dans la table
        if($form->isSubmitted() && $form->isValid()){
            //on recupére les images transmises
            $imgs = $form->get('imgs')->getData();
            //ON BOUCLE SUR LES IMAGES 
            foreach ($imgs as $img) {
                //on generer un nouveau  nom de fichier
                $fichier = md5(uniqid()) . '.' . $img->guessExtension();
                //on copier le fichier dans le dossier uploads
                $img->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                //on stocke l'image dans la base de donnees (son nom)
                $ig = new Img();
                $ig->setNom($fichier);
                $supplements->addImg($ig);
            }
            $supplements->setUsers($this->getUser());
            $supplements->setActive(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($supplements);
            $em->flush();

            return $this->redirectToRoute('supplements');
        }
    
        return $this->render('respo/supplements/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }
   
    
}
