<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.index");
    }

    public function info(){
        return view("home.info");
    }

    public function team(){
        return view("home.team");
    }

    public function app(){
        return view("home.app");
    }

    public function room(){
        return view("home.room");
    }

    public function news(){
        return view("home.news");
    }

    public function contact(){
        return view("home.contact");
    }
}
