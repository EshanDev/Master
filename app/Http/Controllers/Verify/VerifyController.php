<?php

namespace App\Http\Controllers\Verify;

use App\Http\Controllers\Controller;
use App\Models\Serials;
use App\Traits\VerifyRegistrationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifyController extends Controller
{

    use VerifyRegistrationCode;



    // Verify Registration Code.
    public function verify_reg_code(Request $request)
    {
        $Exists_reg_code = Serials::all()->where('serials', $request->input('registration_code'))->first();

        if ($Exists_reg_code) {
            echo 'true';
        } else {
            echo 'false';
        }
    }


    // Verify Email

    public function verify_email(Request $request)
    {
        $Exists_email = Serials::all()->where('email', $request->input('student_email'))->first();

        if ($Exists_email) {
            echo 'false';
        } else {
            echo 'true';
        }
    }

    // Verify Student Code

    public function verify_student_code(Request $request)
    {
        $Exists_code = Serials::all()->where('student_code', $request->input('student_code'))->first();
        if ($Exists_code) {
            echo 'false';
        } else {
            echo 'true';
        }
    }
}
