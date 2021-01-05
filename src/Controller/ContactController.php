<?php

namespace App\Controller;

use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(EmailService $emailService): Response
    {
        $email = "pierre@gmail.com";
        $message = "Bonjour, super !";

        $data = [
            'replyTo' => $email,
            // 'email' => $email,
            'message' => $message,
            'subject' => "[Alison - CONTACT]",
            'template' => 'email/contact.email.twig',
        ];

        $emailService->send($data);

        return $this->render('contact/index.html.twig', [

        ]);
    }
}

// class ContactController extends AbstractController
// {
//     /**
//      * @Route("/contact", name="contact")
//      */
//     public function sendEmail(MailerInterface $mailer)
//     {
//         $email = (new Email())
//             ->from('hello@example.com')
//             ->to('demo.wf3.victor@gmail.com')
//             //->cc('cc@example.com')
//             //->bcc('bcc@example.com')
//             //->replyTo('fabien@example.com')
//             //->priority(Email::PRIORITY_HIGH)
//             ->subject('prosper: Time for Symfony Mailer!')
//             ->text('Sending emails is fun again!')
//             ->html('<p>See Twig integration for better HTML integration!</p>');

//         $mailer->send($email);

//         return $this->render('contact/index.html.twig', [

//         ]);
//     }
// }
