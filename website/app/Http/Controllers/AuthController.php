<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
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

    public function register()
    {
        return view('home.elements.register');
    }

    public function do_register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|min:10',
            'citizen_id' => 'required|min:12',
            'dob' => 'required',
            'address' => 'required'
        ], []);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'citizen_id' => $request->citizen_id,
            'dob' => $request->dob,
            'address' => $request->address,
        ]);
        return redirect('/')->with('success', 'Your account has been created successfully!');
    }

    public function forgot_password()
    {
        return view('home.elements.forgotpass');
    }

    public function do_forgot_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        if (User::where('email', '=', $request->email)->exists()) {
            $random = Str::random(8);
            $user_mail = User::where('email', $request->email)->first();
            $user_mail->password = Hash::make($random);
            $user_mail->save();

            $toEmail = $user_mail->email;
            $message = 'Your New Password is '.$random;
            $subject = 'Your Account Password is Reset!';

            $d = Mail::to($toEmail)->send(new ResetPassword($message, $subject));

            return redirect('/')->with('success', 'Email da gui!');

        } else {
            return redirect()->back()->with('error', 'Email khong ton tai!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index'); // Thay 'home' bằng route bạn muốn redirect sau khi logout
    }
}
