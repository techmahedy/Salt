<?php

use App\Application;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application();

require __DIR__ . '/../routes/web.php';

$app->run();

