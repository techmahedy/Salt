<?php

namespace App;

use App\Web\Route;
use App\Database\Database;
use App\Database\Connection;
use App\Http\Request\Request;

class Application
{   
    CONST VERSION = '1.0';

    public Route $route;
    public Request $request;
    public Database $database;

    public function __construct($config = [])
    {   
        $this->request = new Request();
        $this->route = new Route($this->request);
        $this->database = new Database($config);
    }

    public function run()
    {
        echo $this->route->resolve($this->request);
    }
}