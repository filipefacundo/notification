<? php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$mail = new Email(2, "mail.host.com", "your@email.com", "your pass", "smtp secure (tls / ssl)", "language (example: 'br')", "from@email.com", "From the name");

$email-> sendEmail("Subject", "Content", "reply@email.com", "Repetition Name", "address@email.com", "Address Name");