<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Reg\RegController;
use Illuminate\Support\Facades\Route;




Route::get('/', [RegController::class, 'index'])->name('auth.home');

Route::post('/send_coded', [RegController::class, 'created']);






Route::get('/register', [RegController::class, 'showRegisterForm'])->name('auth.register');
Route::post('/register/send', [RegController::class, 'registered']);






Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
