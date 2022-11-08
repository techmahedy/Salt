<?php

namespace App\Http\Controllers;

use App\Http\Request\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{   
    public function welcome()
    {   
        $params = [
            'name' => 'Salt'
        ];

        return $this->view('welcome',$params);
    }

    public function index()
    {
        return $this->view('contact');
    }

    public function store(Request $request)
    {   
        if($request->isPost()){
            dump($request->getBody());
        }
    }
}