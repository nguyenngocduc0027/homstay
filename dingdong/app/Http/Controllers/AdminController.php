<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function houses(){
        return view('admin.home.houses.show');
    }

    public function create_houses(){
        return view('admin.home.houses.create');
    }

    public function update_houses(){
        return view('admin.home.houses.edit');
    }

    public function detail_houses(){
        return view('admin.home.houses.detail');
    }

    public function rooms(){
        return view('admin.home.rooms.show');
    }

    public function create_rooms(){
        return view('admin.home.rooms.create');
    }

    public function update_rooms(){
        return view('admin.home.rooms.edit');
    }

    public function detail_rooms(){
        return view('admin.home.rooms.detail');
    }
}
