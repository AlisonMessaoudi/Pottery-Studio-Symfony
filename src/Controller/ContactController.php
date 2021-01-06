<?php

namespace App\Controller;

/**/ use App\Service\EmailService; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**/ use Symfony\Component\HttpFoundation\Request; 


class ContactController extends AbstractController
{

    /**
     * @Route("/contact", name="contact")
     */
    
    public function index(EmailService $emailService, Request $request): Response
    
    {

        if ($request->isMethod('POST')) 
        /* Si la requête utilise la méthode Post */
        {
            /* Je crée un $email contenant l'email renseigné */
            $email = $request->request->get('email');
            
            /* Je crée un $message contenant le message renseigné */
            $message = $request->request->get('message');
        

            $emailService->send([
                'replyTo' => $email,
                'subject' => "email.contact.subject",
                /* revoir explication ! */
                'template' => 'email/contact.email.twig',
                /* modèle du mail */
                'context' => [
                /* context : */
                    'email' => $email,
                    'message' => $message
                ]
            ]);

            $this->addFlash('success','Nous avons bien reçu votre message. Merci !');
            
            return $this->redirectToRoute('contact');
        
        } /* fin du if */
        

        return $this->render('contact/contact.html.twig', [

        ]); /* fin de return */
    
    } /* fin de la function index */

} /* fin de class ContactController */
