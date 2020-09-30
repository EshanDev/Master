<?php


use App\Http\Controllers\Verify\VerifyController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function () {
    Route::post('verify', [VerifyController::class,'verify'])->name('verify.reg.code');

    Route::get('verify_registration_code', [VerifyController::class, 'showVerifyRegistrationForm'])->name('verify');

    // Verify Email Address
    Route::get('verify_email', [VerifyController::class, 'verify_email'])->name('verify.email');

    // Verify Student Code
    Route::get('verify_student_code', [VerifyController::class, 'verify_student_code'])->name('verify.student.code');

    Route::get('verify_reg_code', [VerifyController::class, 'verify_registration_code'])->name('verify.registration.code');


});
