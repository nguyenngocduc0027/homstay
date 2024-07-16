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
Route::get('/them-nha-tro', [AdminController::class, 'create_houses'])->name('create_houses');
Route::get('/chinh-sua-nha-tro', [AdminController::class, 'update_houses'])->name('update_houses');
Route::get('/chi-tiet-nha-tro', [AdminController::class, 'detail_houses'])->name('detail_houses');
Route::get('/phong-tro', [AdminController::class, 'rooms'])->name('admin_rooms');
Route::get('/them-phong-tro', [AdminController::class, 'create_rooms'])->name('create_rooms');
Route::get('/chinh-sua-phong-tro', [AdminController::class, 'update_rooms'])->name('update_rooms');
Route::get('/chi-tiet-phong-tro', [AdminController::class, 'detail_rooms'])->name('detail_rooms');
