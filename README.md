# Email Notification Library using phpMailer

Send by email using a phpmailer library. Doing a decompilation action is essential for any system.

To do a library installation, run the following command:

```sh
composer require filipefbezerra/notification
```

To make use of the library, simply require the autoload of the composer, invoke and call the method method:

```sh
<? php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$mail = new Email (2, "mail.host.com", "your@email.com", "your pass", "smtp secure (tls / ssl)", "language (example: 'br')", "from@email.com", "From the name");

$email-> sendEmail ("Subject", "Content", "reply@email.com", "Repetition Name", "address@email.com", "Address Name");
```

Note that the entire configuration of the email is being used by the magic method builder! Once the builder is invoked within your application, your system will be able to execute the shots.

### Developers
* [Filipe Facundo] - Highlights library!
* [phpMailer] - Lib to send email

License
----

MIT

** make good use! **

[//]: #
[Filipe Facundo]: <mailto: contato@filipefbezerra.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>