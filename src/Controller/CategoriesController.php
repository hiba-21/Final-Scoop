<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategoriesType;
use App\Entity\Produits;
use App\Form\ProduitsType;
use App\Repository\CategoriesRepository;
use App\Repository\ImageRepository;
use App\Entity\Image;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/respo/Categories", name="respo_Categories_")
 */
class CategoriesController extends AbstractController
{
     /**
    * @var ProduitsRepository
    * @var CategoriesRepository
    */
    private $ProduitsRepository;
    private $CategoriesRepository;
    public function __construct(ProduitsRepository $ProduitsRepository,CategoriesRepository $CategoriesRepository)
    {
        $this->ProduitsRepository = $ProduitsRepository;
        $this->CategoriesRepository = $CategoriesRepository;
    }

    /**
     * @Route("/cat", name="home")
     */
    public function categorie(CategoriesRepository $categoriesRepository, ProduitsRepository $produitsRepository): Response
    {
        return $this->render('responsable/dashboard/cataloge.html.twig', [
            'categories' => $categoriesRepository->findAll(),  'produits' => $produitsRepository->findAll()
        ]);
    }
    /**
     * @Route("/produit", name="produit")
     */
    public function produit(ProduitsRepository $produitsRepository): Response
    {
        $produits = $produitsRepository->findAll();
        dump($produits);
        return $this->render('responsable/dashboard/produit.html.twig', [
            'produits' => $produits
        ]);
    }
    /**
     * @Route("/affProduit/{id}", name="aff_Produit")
     * @param $id
     */
    public function showPro(int $id, ProduitsRepository $produitsRepository, CategoriesRepository $categoriesRepository): Response

    {
        $produitcategories = $produitsRepository->findOneByCategories($id);
        dump($produitcategories);

        return $this->render('respo/AffProduit.html.twig', [
            'produitcategories' => $produitcategories,
            'produits' => $produitsRepository->findBy(['active' => true], ['id' => 'DESC']),

            'categories' => $categoriesRepository->findBy(['active' => true], ['id' => 'DESC']),
        ]);
    }
    /**
     * @Route("/ajout", name="ajout")
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
            return new Response(
                ' and new category with id: '.$categorie->getId()
            );
            return $this->redirectToRoute("respo_Categories_home");
        }
        return $this->render('respo/categories/ajout.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/modifier/{id}", name="modifier")
     */
    public function modifierCategorie(categories $categorie, Request $request): Response
    {
        $form = $this->createForm(CategoriesType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->setUsers($this->getUser());
            $categorie->setActive(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("respo_Categories_home");
        }
        return $this->render('respo/categories/ajout.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/ajoutProduit", name="ajoutProduit")
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
            return $this->redirectToRoute("respo_Categories_produit");
        }
        return $this->render('respo/produit/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/modifierProduit/{id}", name="modifierProduit")
     */
    public function modifierProduit(Produits $produits, Request $request): Response

    {

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
            return $this->redirectToRoute("respo_Categories_produit");
        }
        return $this->render('respo/produit/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/activer/{id}", name="activer")
     */
    public function activer(Produits $produit)
    {
        $produit->setActive(($produit->getActive()) ? false : true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($produit);
        $em->flush();
        return new Response("true");
    }
    /**
     * @Route("/supprimer/{id}", name="supprimer")
     */
    public function supprimer(Produits $produit)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        $this->addFlash('message', 'produit supprimer avec succés');
        return $this->redirectToRoute('respo_Categories_produit');
    }
    /**
     * @Route("/activerCat/{id}", name="activerCat")
     */
    public function activerCat(Categories $categories)
    {
        $categories->setActive(($categories->getActive()) ? false : true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($categories);
        $em->flush();
        return new Response("true");
    }
    /**
     * @Route("/supprimerCat/{id}", name="supprimerCat")
     */
    public function supprimerCat(Categories $categories)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($categories);
        $em->flush();
        $this->addFlash('message', 'categories supprimer avec succés');
        return $this->redirectToRoute('respo_Categories_home');
    }
    /**
     * @Route("/supprime/image/{id}" , name="produit_delete_image" , methods={"DELETE"})
     */
    public function deleteImage(Image $image, Request $request)
    {
        $data = json_decode($request->getContent(), true);
        //on verifier si le token est valide 
        if ($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])) {
            //on recupére le nom de l'image
            $nom = $image->getNom();
            //on supprime le fichier
            unlink($this->getParameter('images_directory') . '/' . $nom);
            //on supprime l'entrer de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();
            //on répond en json
            return new JsonResponse(['success' => 1]);
        } else {
            return new JsonResponse(['error ' => 'Token Invalide'], 400);
        }
    }
}
