<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/info', [HomeController::class, 'info'])->name('info');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/app', [HomeController::class, 'app'])->name('app');
Route::get('/room', [HomeController::class,'room'])->name('room');
Route::get('/news', [HomeController::class,'news'])->name('news');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

//Authencation
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/do-register', [AuthController::class, 'do_register'])->name('do-register');
Route::get('/forgot', [AuthController::class, 'forgot_password'])->name('forgot');
Route::post('/do-forgot', [AuthController::class, 'do_forgot_password'])->name('do-forgot');
Route::post('/do-login', [AuthController::class,'login'])->name('do-login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

// Nav
Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
Route::get('/profile', [UserController::class,'profile'])->name('profile');
Route::get('/my_profile', [UserController::class, 'my_profile'])->name('my-profile');
Route::get('/contract', [UserController::class, 'contract'])->name('contract');
Route::get('/bill', [UserController::class, 'bill'])->name('bill');
Route::get('/reset-password', [UserController::class, 'reset_password'])->name('reset-password');


//Admin
Route::get('/account', [AdminController::class,'account'])->name('account');
Route::post('/do-account', [AdminController::class, 'add_account'])->name('add_account');
Route::delete('/delete-account/{id}', [AdminController::class, 'delete_account'])->name('delete_account');

