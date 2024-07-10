<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/dang-nhap', [AuthController::class,'login'])->name('login');
Route::get('/dang-ky', [AuthController::class,'register'])->name('register');
Route::get('/quen-mat-khau', [AuthController::class,'forgot'])->name('forgot');
Route::get('/admin-dashboard',[AdminController::class, 'dashboard'])->name('admin_dashboard');
Route::get('/nha-tro', [AdminController::class, 'houses'])->name('admin_houses');
