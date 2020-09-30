<?php


use App\Http\Controllers\Verify\VerifyController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function () {


    // GET
    Route::get('/verify', [VerifyController::class, 'showVerifyForm'])->name('verify');





    // POST
    Route::post('verify', [VerifyController::class,'verify']);



    //Verify
    Route::name('verify.')->group(function (){
        // Verify Email Address
        Route::get('verify_email', [VerifyController::class, 'verify_email'])->name('email');

        // Verify Student Code
        Route::get('verify_student_code', [VerifyController::class, 'verify_student_code'])->name('student.code');

        // Verify Registration Code
        Route::get('verify_reg_code', [VerifyController::class, 'verify_reg_code'])->name('registration.code');
    });




});
