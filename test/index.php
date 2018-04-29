<?php
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.filipefbezerra.com.br", "sender@filipefbezerra.com.br", "teste@123@", "tls", '587', 'br', "contato@filipefbezerra.com.br", "Filipe Facundo");
$novoEmail->sendMail("Assunto de Teste", "<p>This is email of <b>test</b>!</p>", "yourmail@domain.com", "Filipe Facundo", "mailofdestination@mail.com", "Name of Destination");