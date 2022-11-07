<?php

namespace App;

use App\Web\Router;
use App\Http\Request\Request;

class Application
{   
    CONST VERSION = '1.0';

    public Router $router;
    public Request $request;

    public function __construct()
    {   
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve($this->request);
    }
}