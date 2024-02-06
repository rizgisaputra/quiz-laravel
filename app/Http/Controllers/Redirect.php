<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Redirect extends Controller
{
    public function redirectHome(){
        return view('landing-page');
    }

    public function redirectLogin(){
        return view('login-page');
    }

    public function redirectRegister(){
        return view('register-page');
    }

    public function redirectTodosPage(){
        return view('todos-page');
    }
}
