<?php

use App\Application;
use App\Http\Controllers\ContactController;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', [ContactController::class,'welcome']);
$app->router->get('/contact', [ContactController::class,'index']);
$app->router->post('/contact', [ContactController::class,'store']);

$app->run();

