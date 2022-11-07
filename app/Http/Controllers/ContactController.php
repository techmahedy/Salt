<?php

namespace App\Http\Controllers;

use App\Web\Html;

class ContactController extends Html
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

    public function store()
    {
        return 'submit form';
    }
}