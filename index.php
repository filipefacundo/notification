<?php
require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="charset" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>

    <meta name="description" content="">
</head>
<body>
    <?php
        $novoEmail = new Email;
        $novoEmail->sendMail("Assunto de Teste", "<p>This is email of <b>test</b>!</p>", "yourmail@domain.com", "Filipe Facundo", "mailofdestination@mail.com", "Name of Destination");

        var_dump($novoEmail);
    ?>
</body>
</html>

