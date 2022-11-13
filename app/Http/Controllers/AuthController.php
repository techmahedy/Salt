<?php

namespace App\Http\Controllers;

use App\Http\Request\Request;
use App\Http\Controllers\Controller;
use App\Models\Register;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return $this->view('login');
    }

    public function showRegisterForm()
    {
        return $this->view('register');
    }

    public function registerUser(Request $request)
    {   
        $register = new Register;
        $register->loadData($request->getBody());

        if($register->validate()) {
          return "Success";
        }
        
        return $this->view('register',[
            'model' => $register
        ]);
    }
}