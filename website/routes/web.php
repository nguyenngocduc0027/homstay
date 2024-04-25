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

Route::post('/do-login', [AuthController::class,'login'])->name('do-login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

// Nav
Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
Route::get('/profile', [UserController::class,'profile'])->name('profile');
