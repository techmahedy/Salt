<?php

namespace App\Web;

use App\Http\Request\Request;
use App\Http\Response\Response;
use App\Http\Controllers\Controller;

class Route extends Controller
{    
    protected array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    } 

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    } 

    public function resolve(Request $request)
    {   
        $callback = $this->routes[$request->getMethod()][$request->getPath()] ?? false;
        if($callback === false) {
           (new Response())->abort(404);
           return "Not Found!";
        }
        if(is_string($callback)) {
            return $this->view($callback);
        }
        if(is_array($callback)) {
            $callback[0] = new $callback[0]();
        }

        return call_user_func($callback, $request);
    }
}