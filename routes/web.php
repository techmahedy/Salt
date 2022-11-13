<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

$app->route->get('/', [ContactController::class,'welcome']);
$app->route->get('/contact', [ContactController::class,'index']);
$app->route->post('/contact', [ContactController::class,'store']);

/** 
 * AUTH ROUTE
 */
$app->route->get('/login', [AuthController::class,'showLoginForm']);
$app->route->get('/register', [AuthController::class,'showRegisterForm']);
$app->route->post('/register', [AuthController::class,'registerUser']);