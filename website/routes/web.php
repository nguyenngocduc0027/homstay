<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/info', [HomeController::class, 'info'])->name('info');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/app', [HomeController::class, 'app'])->name('app');
