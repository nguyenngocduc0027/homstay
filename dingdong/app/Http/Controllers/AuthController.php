<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function forgot(){
        return view('auth.forgot');
    }


}
