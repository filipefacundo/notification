<?php

namespace Notification;

use Mockery\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    private $mail = \stdClass::class;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        //Server settings
        $this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'mail.domain.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'mail@domain.com';                 // SMTP username
        $this->mail->Password = 'password';                           // SMTP password
        $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to
        $this->mail->CharSet = 'utf-8';                               // Charset
        $this->mail->setLanguage('br');                       //Language email
        $this->mail->isHTML(true);
        $this->mail->setFrom('yourmail@domain.com', 'Filipe FB');
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;
        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try{
            $this->mail->send();
        }catch (Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}