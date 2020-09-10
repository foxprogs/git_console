<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$app = new \Symfony\Component\Console\Application('Git console app');

$app->add(new App\SayHelloCommand());

$app->run();
