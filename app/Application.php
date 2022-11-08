<?php

namespace App;

use App\Web\Route;
use App\Http\Request\Request;

class Application
{   
    CONST VERSION = '1.0';

    public Route $route;
    public Request $request;

    public function __construct()
    {   
        $this->request = new Request();
        $this->route = new Route($this->request);
    }

    public function run()
    {
        echo $this->route->resolve($this->request);
    }
}