<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Reg\RegController;
use Illuminate\Support\Facades\Route;




Route::get('/', [RegController::class, 'index'])->name('auth.home');

Route::post('/', [RegController::class, 'created']);






Route::get('/register', [RegController::class, 'showRegisterForm'])->name('auth.register');






Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
