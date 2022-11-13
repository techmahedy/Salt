<?php

namespace App\Http\Controllers;

use App\Http\Request\Request;
use App\Http\Controllers\Controller;
use App\Models\Register;

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