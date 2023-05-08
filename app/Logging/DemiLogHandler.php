<?php

namespace App\Logging;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Monolog\Handler\SymfonyMailerHandler;

class DemiLogHandler extends SymfonyMailerHandler
{

    public function __construct($from, $to = 'support@demi.sk')
    {
        $username = config('mail.mailers.smtp.username');
        $password = config('mail.mailers.smtp.password');
        $host = config('mail.mailers.smtp.host');
        $port = config('mail.mailers.smtp.port');

        if ( ! isset($username, $password, $host, $port) || ! env('DEMI_LOG') ) {
            return;
        }

        $mailer = $this->getMailer(urlencode($username), urlencode($password), $host, $port);

        $email = $this->getErrorMail($from, $to);

        parent::__construct($mailer, $email);
    }

    private function getMailer(string $username, string $password, string $host, string $port) : Mailer
    {
        $transport = Transport::fromDsn("smtp://$username:$password@$host:$port");

        return new Mailer($transport);
    }

    private function getErrorMail(string $from, string $to) : Email
    {
        return (new Email())
            ->subject("Demi Log Error")
            ->from($from)
            ->to($to);
    }

    protected function send(string $content, array $records): void
    {
        if( ! env('DEMI_LOG') ) return;

        parent::send($content, $records);
    }

}
