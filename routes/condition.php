<?php
//
//use App\Http\Controllers\Auth\ConditionController;
//use Illuminate\Support\Facades\Route;
//
//
///*
//|-----------------------------------------------------------------------
//| Condition Routes
//|-----------------------------------------------------------------------
//|
//| Here is where you can register web routes for yout applictaion. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//
///**
// *
// * Condition Routes
// * @use App\Http\Controllers\Auth\ConditionController
// *
// */
//Route::name('condition.')->group(function () {
//    // Display Condition page.
//    Route::get('/', function () {
//        return view('auth', ['tag' => 'home']);
//    })->name('home');
//
//
//    // Display Verify condition form.
//    Route::get('verify', [ConditionController::class, 'verifyRegistrationCodeForm'])
//        ->name('verify.code');
//});
//
//Route::prefix('verify')->group(function(){
//    // Verify Student ID && Student Email, When already exists and reture false.
//    Route::get('student_code', [ConditionController::class, 'student_code']);
//    Route::get('student_email', [ConditionController::class, 'student_email']);
//
//
//});
//
//
//    // Auth
//Route::name('auth.')->group(function(){
//    Route::get('register', [ConditionController::class, 'show_registration_form'])->name('register');
//});
//
