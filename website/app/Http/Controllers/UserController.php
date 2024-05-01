<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $user = auth()->user();
        return view("user.index",compact("user"));
    }

    public function my_profile(){
        $user = auth()->user();
        return view("user.user_profile",compact("user"));
    }

    public function contract(){
        return view("user.contract");
    }

    public function bill(){
        return view("user.bill");
    }

    public function reset_password(){
        return view("user.reset_password");
    }
}
