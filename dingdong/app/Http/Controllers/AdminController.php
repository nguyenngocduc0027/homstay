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


    public function customer(){
        return view('admin.account.customer.show');
    }

    public function create_customer(){
        return view('admin.account.customer.create');
    }

    public function update_customer() {
        return view('admin.account.customer.edit');
    }

    public function detail_customer(){
        return view('admin.account.customer.detail');
    }

    public function manager(){
        return view('admin.account.manager.show');
    }

    public function create_manager(){
        return view('admin.account.manager.create');
    }

    public function update_manager(){
        return view('admin.account.manager.edit');
    }

    public function detail_manager(){
        return view('admin.account.manager.detail');
    }

    public function electric(){
        return view('admin.meter.electric.show');
    }
}
