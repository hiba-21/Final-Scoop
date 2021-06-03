<?php

namespace App\Controller;

use App\Entity\Contact1;
use App\Form\ContactType;

use Doctrine\Persistence\ObjectManager;
use Swift_Mailer;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;


class ContactController extends AbstractController
{
    protected static $defaultName = 'send:email';
    private $mailer;
    public function __construct(Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    /**
     * @Route("/contact", name="contact")
     * 
     *  @param Request $request
     * @return Response
     */

    /* public function index(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }*/
    /**/
    public function show(Request $request, Swift_Mailer $mailer): Response
    {
        $contact = new Contact1();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
        }

        $message = (new \Swift_Message($contact->getMessage()))

            ->setFrom($contact->getEmail())
            ->setTo('hibarassas12l@gmail.com')
            ->setBody(

                "test email",
                'text/html'

            );

        $mailer->send($message);


        return $this->render('home/contact1.html.twig', [
            'formContact' => $form->createView(),
        ]);
    }
}
