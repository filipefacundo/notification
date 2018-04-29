<?php

namespace Notification;

use Mockery\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setLanguage, $setFromEmail, $setFromName)
    {
        $this->mail = new PHPMailer(true);
        //Server settings
        $this->mail->SMTPDebug = $smtpDebug;                        // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = $host;                                  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = $user;                              // SMTP username
        $this->mail->Password = $pass;                              // SMTP password
        $this->mail->SMTPSecure = $smtpSecure;                      // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = $port;                                  // TCP port to connect to
        $this->mail->CharSet = 'utf-8';                             // Charset
        $this->mail->setLanguage($setLanguage);                     // Email message language
        $this->mail->isHTML(true);                                  // To accept HTML in the message
        $this->mail->setFrom($setFromEmail, $setFromName);          // Set email and name to send
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