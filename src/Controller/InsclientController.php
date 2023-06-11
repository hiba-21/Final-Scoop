<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Entity\InfoBoutique;
use App\Form\InsClientFormType;
use App\Repository\CategoriesRepository;
use App\Repository\InfoBoutiqueRepository;
use App\Repository\PannierRepository;
use App\Repository\ProduitsRepository;
use App\Repository\SupplementsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class InsclientController extends AbstractController
{
    /**
     * @var ProduitsRepository
     * @var CategoriesRepository
     */
    private $ProduitsRepository;
    private $CategoriesRepository;
    public function __construct(ProduitsRepository $ProduitsRepository, CategoriesRepository $CategoriesRepository)
    {
        $this->ProduitsRepository = $ProduitsRepository;
        $this->CategoriesRepository = $CategoriesRepository;
    }
    /**
     * @Route("/appClient", name="client")
     */
    public function show(ProduitsRepository $produitsRepository, InfoBoutiqueRepository $infoBoutiqueRepository, CategoriesRepository $categoriesRepository, SupplementsRepository $supplementsRepository)
    {

        return $this->render('Client/test.html.twig', [

            'produits' => $produitsRepository->findBy(['active' => true], ['id' => 'DESC']),
            'boutique' => $infoBoutiqueRepository->findAll(),
            'categories' => $categoriesRepository->findBy(['active' => true], ['id' => 'DESC']),
            'supplements' => $supplementsRepository->findAll(['active' => true], ['id' => 'prix'])
        ]);
    }
    /**
     * @Route("/produit", name="produit")
     */
    public function produit(ProduitsRepository $produitsRepository, InfoBoutiqueRepository $infoBoutiqueRepository, CategoriesRepository $categoriesRepository): Response
    {
        $produits = $produitsRepository->findAll();
        dump($produits);
        return $this->render('Client/produit.html.twig', [
            'produits' => $produits,
            'boutique' => $infoBoutiqueRepository->findAll(),
            'categories' => $categoriesRepository->findBy(['active' => true], ['id' => 'DESC']),
        ]);
    }
    /**
     * @Route("/afpd/{id}", name="afpd")
     * @param $id
     */
    public function showPro(int $id, ProduitsRepository $produitsRepository, InfoBoutiqueRepository $infoBoutiqueRepository, CategoriesRepository $categoriesRepository): Response
    {
        $produitcategories = $produitsRepository->findOneByCategories($id);
        dump($produitcategories);
        return $this->render('Client/affproduit.html.twig', [
            'produitcategories' => $produitcategories,
            'produits' => $produitsRepository->findBy(['active' => true], ['id' => 'DESC']),

            'categories' => $categoriesRepository->findBy(['active' => true], ['id' => 'DESC']),
        ]);
    }
    /**
     * @Route("/sup", name="sup")
     */
    public function showsup(SupplementsRepository $supplementsRepository, ProduitsRepository $produitsRepository, InfoBoutiqueRepository $infoBoutiqueRepository, CategoriesRepository $categoriesRepository)
    {
        return $this->render('Client/sup.html.twig', [
            'supplements' => $supplementsRepository->findAll(['active' => true], ['id' => 'prix']),
            'produits' => $produitsRepository->findBy(['active' => true], ['id' => 'DESC']),

            'categories' => $categoriesRepository->findBy(['active' => true], ['id' => 'DESC']),
        ]);
    }
    /**
     * @Route("/etat", name="etat")
     */
    public function showetat(PannierRepository $pannierRepository)
    {
        return $this->render('Client/Etat.html.twig', [
            'pannier' => $pannierRepository->findBy(['activer' => true], ['id' => 'DESC']),

        ]);
    }
    /**
     * @Route("/insclient", name="insclient")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new Clients();
        $form = $this->createForm(InsClientFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('con_client');
        }

        return $this->render('registration/insclient.html.twig', [
            'insclientForm' => $form->createView(),

        ]);
    }
    /**
     * @Route("/conclient", name="con_client")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/conclient.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
