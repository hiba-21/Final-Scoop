<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\InfoBoutique;
use App\Entity\Photo;
use App\Entity\Produit;
use App\Entity\VacanceFermeture;
use App\Form\InfoBoutiqueType;
use App\Form\VacanceFermetureType;
use App\Repository\ClandarRepository;
use App\Repository\ProduitsRepository;
use App\Repository\VacanceFermetureRepository;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\This;
use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home/home.html.twig');
    }
    /**
     * @Route("/service", name="service")
     */
    public function service()
    {
        return $this->render('home/service.html.twig');
    }
    /**
     * @Route("/avis", name="avis")
     */
    public function avis()
    {
        return $this->render('home/avis1.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('home/contact1.html.twig');
    }

    /**
     * @Route("/inscrire", name="inscrire")
     */

    public function inscrire()
    {

        return $this->render('home/inscrire.html.twig');
    }

    /**
     * @Route("/connecter", name="connecter")
     */
    public function connecter()
    {
        return $this->render('home/connecter.html.twig');
    }
    /**
     * @Route("/temp", name="temp")
     */
    public function temp(ProduitsRepository $produitsRepository, CategoriesRepository $categoriesRepository)
    {
        return $this->render('responsable/temp.html.twig', [
            'produits' => $produitsRepository->findBy(['active' => true], ['id' => 'DESC']),
            'categories' => $categoriesRepository->findBy(['active' => true], ['id' => 'DESC']),
        ]);
    }
    /**
     * @Route("/index1", name="index1")
     */
    public function index1()
    {
        return $this->render('responsable/dashboard/index1.html.twig');
    }
    /**
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function utilisateurs()
    {
        return $this->render('responsable/dashboard/utilisateurs.html.twig');
    }
    /**
     * @Route("/categories", name="categories")
     */
    public function categories()
    {
        return $this->render('responsable/dashboard/categories.html.twig');
    }
    /**
     * @Route("/commands", name="commands")
     */
    public function commands()
    {
        return $this->render('responsable/dashboard/commands.html.twig');
    }
    /**
     * @Route("/paiement", name="paiement")
     */
    public function paiement()
    {
        return $this->render('responsable/dashboard/methodeDePaiement.html.twig');
    }
    /**
     * @Route("/promotion", name="promotion")
     */
    public function promotion()
    {
        return $this->render('responsable/dashboard/promotion.html.twig');
    }
    /**
     * @Route("/platforme", name="platforme")
     */
    public function platforme()
    {
        return $this->render('responsable/dashboard/platforme.html.twig');
    }
    /**
     * @Route("/reglage", name="reglage")
     *  @param Request $request
     * @return Response
     */
    public function reglage(Request $request): Response
    {
        $Info = new InfoBoutique();
        $form = $this->createForm(InfoBoutiqueType::class, $Info);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //on recupére les images transmises
            $photos = $form->get('photos')->getData();
            //ON BOUCLE SUR LES IMAGES 
            foreach ($photos as $photo) {
                //on generer un nouveau  nom de fichier
                $fichier = md5(uniqid()) . '.' . $photo->guessExtension();
                //on copier le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                //on stocke l'image dans la base de donnees (son nom)
                $img = new Photo();
                $img->setNom($fichier);
                $Info->addPhoto($img);
            }
            $em = $this->getDoctrine()->getManager();

            $em->persist($Info);
            $em->flush();
            $this->addFlash(
                'notice',
                'Inscription réussie!'
            );
        }
        dump($Info);
        return $this->render('responsable/reglages/reglage.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/vac", name="Info")
     */
    public function Info(VacanceFermetureRepository $vacanceFermetureRepository): Response
    {
        $events = $vacanceFermetureRepository->findAll();
        $tab = [];
        foreach ($events as $event) {
            $tab[] = [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'backgroundColor' => $event->getBackgroundColor(),
                'bordercolor' => $event->getBorderColor(),
                'textcolor' => $event->getTextColor(),
                'allDay' => $event->getAllDay()

            ];
        }
        $data = json_encode($tab);

        return $this->render(
            'responsable/reglages/VacanceFermeture.html.twig',
            compact('data')

        );
    }

    /**
     * @Route("/client", name="client")
     *  @param InfoBoutique $infoBoutique
     */
    public function Client(InfoBoutique $infoBoutique)
    {

        return $this->render('home/Client.html.twig');
    }
    /**
     * @Route("/vacance", name="Client")
     *  @param InfoBoutique $infoBoutique
     */
    public function VacanceFermeture()
    {

        return $this->render('vacance_fermeture/new.html.twig');
    }


    /**
     * @Route("/cal", name="cal")
     */
    public function cal(ClandarRepository $clandar): Response
    {
        $events = $clandar->findAll();
        $tab = [];
        foreach ($events as $event) {
            $tab[] = [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'backgroundColor' => $event->getBackgroundColor(),
                'bordercolor' => $event->getBorderColor(),
                'textcolor' => $event->getTextColor(),
                'allDay' => $event->getAllDay()

            ];
        }
        $data = json_encode($tab);
        return $this->render(
            'home/calandar.html.twig',
            compact('data')
        );
    }
    /**
     * @Route("/panier", name="panier")
     */
    public function panier(SessionInterface $session, ProduitsRepository $produitsRepository)
    {
        $panier = $session->get('panier', []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity) {
            $panierWithData[] = [
                'produit' => $produitsRepository->find($id),
                'quantity' => $quantity
            ];
        }
        $total = 0;
        foreach ($panierWithData as $item) {
            $totalItem = $item['produit']->getPrix() * $item['quantity'];
            $total += $totalItem;
        }

        return $this->render('client/panier.html.twig', [
            'items' => $panierWithData,
            'total' => $total
        ]);
    }
    /**
     * @Route("/panier/add/{id}", name="panier_add")
     */
    public function add($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);
        return $this->redirectToRoute("panier");
    }
    /**
     * @Route("/panier/remove/{id}", name="panier_remove")
     */
    public function remove($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier', $panier);
        return $this->redirectToRoute("panier");
    }
}
