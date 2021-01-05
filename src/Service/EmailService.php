<?php 

namespace App\Service;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class EmailService 
{
    private $mailer;
    private $adminEmail;
    private $env;
    private $translator;

    public function __construct(MailerInterface $mailer, $adminEmail, $env)
    {
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
        $this->env = $env;
    }

    public function send(array $data): bool 
    {

        if($this->env === 'dev' || !isset($data['to']))
        {
            $to = $this->adminEmail;
        }
        else 
        {
            $to=$data['to'];
        }

        $email = (new TemplatedEmail())
            ->from($this->adminEmail)
            ->to('demo.wf3.victor@gmail.com')
            ->replyTo($data['replyTo' ?? $this->adminEmail])
            ->subject($data['subject'] ?? '')
            ->htmlTemplate($data['template'])
            ->context($data['context'] ?? []);


        $this->mailer->send($email);

        return true;
    }
}