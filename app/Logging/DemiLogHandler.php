<?php

namespace App\Logging;

use Monolog\Level;
use Monolog\Logger;
use Monolog\LogRecord;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Monolog\Handler\SymfonyMailerHandler;

class DemiLogHandler extends SymfonyMailerHandler
{

    public function __construct($from, $to = 'support@demi.sk')
    {
        $username = urlencode( config('mail.mailers.smtp.username') );
        $password = urlencode( config('mail.mailers.smtp.password') );
        $host = config('mail.mailers.smtp.host');
        $port = config('mail.mailers.smtp.port');

        $transport = Transport::fromDsn("smtp://$username:$password@$host:$port");

        $mailer = new Mailer($transport);

        $email = (new Email())
            ->subject("Demi Log Error")
            ->from($from)
            ->to($to);

        parent::__construct($mailer, $email);
    }

}
