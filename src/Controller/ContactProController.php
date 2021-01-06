<?php

namespace App\Controller;

/**/ use App\Entity\ContactPro;
/**/ use App\Repository\ContactProRepository;
/**/ use App\Service\EmailService;
/**/ use DateTime;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**/ use Symfony\Component\HttpFoundation\Request;


class ContactProController extends AbstractController
{
    
    /**
     * @Route("/contact/pro", name="contact_pro")
     */

    public function index(Request $request, EmailService $emailService): Response
    {

        if ($request->isMethod('POST')) 
        /* Si la requête utilise la méthode Post */
        {
            /* Alors je crée ma $contactPro */

            $contactPro = (new ContactPro())
            
            /* Composé de : */
                
                /* Récupère les données du formulaire */
                ->setFirstname($request->request->get('firstname'))
                ->setLastname($request->request->get('lastname'))
                ->setCompany($request->request->get('company'))
                ->setSubject($request->request->get('subject'))
                ->setEmail($request->request->get('email'))
                ->setMessage($request->request->get('message'))
                
                /* Crée la date d'envoi du message */
                ->setCreatedAt(new DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($contactPro);
            $em->flush();

            $context = ['contactPro' => $contactPro];

            # JE M'ENVOIE UN EMAIL
            $emailService->send([
                
                'replyTo' => $contactPro->getEmail(),
                'subject' => $contactPro->getSubject(),
                
                'template' => 'email/contact_pro.email.twig',
                
                'context' => $context,
            
            ]);

            # ENVOI D'UN EMAIL DE CONFIRMATION
            $emailService->send([
                
                'to' => $contactPro->getEmail(),
                'subject' => 'Nous avons bien reçu votre message. Merci !',
                
                'template' => 'email/contact_pro_confirmation.email.twig',
                
                'context' => $context,
            ]);

            $this->addFlash('success', "Nous avons bien reçu votre message.");

            return $this->redirectToRoute('contact_pro');
        
        } /* fin du if */


        return $this->render('contact_pro/index.html.twig');
    
    } /* fin de la fonction index */

    /** 
     * @Route("/contact/pro-admin",name="contact_pro_admin")
    */

    public function contactProAdmin(ContactProRepository $contactProRepository) 
    {
        // $start = new \DateTime('2021/01/04');
        // $end = new \DateTime('2021/01/06');
        // $contactPros = $contactProRepository->findContactsBetweenTwoDates($start, $end);

        $search = $request->query->get('search');
        if ($search) {
            $contactPros = $contactProRepository->search($search);
        } else {
            $contactPros = $contactProRepository->findAll();
        }
        
        return $this->render('contact/contact_pro_admin.html.twig',[
            'contactPros' => $contactPros
        ]);
    }

} /* fin de class ContactProController */
