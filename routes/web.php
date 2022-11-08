<?php

use App\Http\Controllers\ContactController;

$app->route->get('/', [ContactController::class,'welcome']);
$app->route->get('/contact', [ContactController::class,'index']);
$app->route->post('/contact', [ContactController::class,'store']);