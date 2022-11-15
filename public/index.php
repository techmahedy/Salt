<?php

use Dotenv\Dotenv;
use App\Application;


require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'connection' => $_ENV['DB_CONNECTION'],
        'host'       => $_ENV['DB_HOST'],
        'port'       => $_ENV['DB_PORT'],
        'database'   => $_ENV['DB_DATABASE'],
        'user'       => $_ENV['DB_USERNAME'],
        'password'   => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application($config);

require __DIR__ . '/../routes/web.php';

$app->run();

