<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        // Validate thông tin đăng nhập
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication thành công
                return redirect()->route('index');
        } else {
            // Authentication không thành công
            return redirect()->back()->withInput()->withErrors(['error' => 'Sai tên đăng nhập hoặc mật khẩu']);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index'); // Thay 'home' bằng route bạn muốn redirect sau khi logout
    }
}
