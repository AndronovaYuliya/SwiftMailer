<?php

require "vendor/autoload.php";
//require_once 'vendor/autoload.php';

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
    ->setUsername('andron39933993@gmail.com')
    ->setPassword('пароль')
    ->setEncryption("tls")
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['john@doe.com' => 'John Doe'])
    ->setTo(['andron39933993@gmail.com' => 'A name'])
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);