<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function account(User $user){
        $data_user = User::all();
        return view("admin.account.index", compact('data_user'));
    }
}
