<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Image;
use App\Form\CategoriesType;
use App\Entity\Produits;
use App\Form\ProduitsType;
use App\Repository\CategoriesRepository;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/respo", name="respo_")
 */
class RespoController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CategoriesRepository $categoriesRepository, ProduitsRepository $produitsRepository): Response
    {
        return $this->render('responsable/dashboard/cataloge.html.twig', [
            'categories' => $categoriesRepository->findAll(),  'produits' => $produitsRepository->findAll()
        ]);
    }
    /**
     * @Route("/categories/ajout", name="categories_ajout")
     */
    public function ajoutCategorie(Request $request): Response
    {
        $categorie = new Categories;
        $form = $this->createForm(CategoriesType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->setUsers($this->getUser());
            $categorie->setActive(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("respo_home");
        }
        return $this->render('respo/categories/ajout.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/produit/ajout", name="produit_ajout")
     */
    public function ajoutProduit(Request $request): Response

    {
        $produits = new Produits;
        $form = $this->createForm(ProduitsType::class, $produits);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //on recupére les images transmises
            $images = $form->get('images')->getData();
            //ON BOUCLE SUR LES IMAGES 
            foreach ($images as $image) {
                //on generer un nouveau  nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                //on copier le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                //on stocke l'image dans la base de donnees (son nom)
                $img = new Image();
                $img->setNom($fichier);
                $produits->addImage($img);
            }


            $produits->setUsers($this->getUser());
            $produits->setActive(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($produits);
            $em->flush();
            return $this->redirectToRoute("respo_home");
        }
        return $this->render('respo/produit/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
