<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Reg\RegController;
use Illuminate\Support\Facades\Route;




Route::get('/', [RegController::class, 'index'])->name('auth.home');

Route::post('/', [RegController::class, 'create_registration_code'])->name('auth.create.registration.code');




Route::get('/register', [RegController::class, 'showRegistrationForm'])->name('auth.register');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
