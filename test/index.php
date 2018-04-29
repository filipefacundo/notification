<?php
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.domain.com", "mail@domain.com", "yourpass", "tls", port "587", "mail@domain.com", "Filipe Facundo");
$novoEmail->sendMail("Assunto de Teste", "<p>This is email of <b>test</b>!</p>", "yourmail@domain.com", "Filipe Facundo", "mailofdestination@mail.com", "Name of Destination");