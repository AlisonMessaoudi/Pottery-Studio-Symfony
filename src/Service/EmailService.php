<?php 

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Contracts\Translation\TranslatorInterface;


class EmailService 
{
    private $mailer;
    private $adminEmail;
    private $env;
    private $translator;

    public function __construct(MailerInterface $mailer, $adminEmail, $env, TranslatorInterface $translator)
    {
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
        $this->env = $env;
        $this->translator = $translator;
    }

    public function send(array $data): bool 
    {

        if($this->env === 'dev' || !isset($data['to']))
        
        /* Si env = dev ou si pas de 'to', on redirige sur ADMIN_EMAIL */
        
        {
            $to = $this->adminEmail;
        }
        
        else 
        
        {
            $to=$data['to'];
        }

        # TRADUIRE LE SUBJECT
        
        $subject = '';
        /* création d'une variable $subject qui recevra/contiendra le message */

        if (isset($data['subject'])) 
        /* si un message est renseigné */
        {
            /* alors on réinitialise la variable subject */
            
            $subject = $this->translator->trans($data['subject']);
            
            /* qui contient ????? */
        }

        $email = (new TemplatedEmail())
            ->from($this->adminEmail)
            ->to($to)
            ->replyTo($data['replyTo' ?? $this->adminEmail])
            ->subject($subject)
            
            ->htmlTemplate($data['template'])
            ->context($data['context'] ?? []);

        $this->mailer->send($email);

        return true;
    
    } /* fin de la function send */

} /* fin de class EmailService */