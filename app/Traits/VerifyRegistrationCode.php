<?php
namespace App\Traits;
use App\Models\Serials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait VerifyRegistrationCode
{
    public function showVerifyForm()
    {
        return view('system.auth',['route'=>'verify_registration_code']);
    }
















    // Verisy Registration Code.



    public function verify(Request $request)
    {
        $serial = $request->input('registration_code');
        $serials = DB::table('serials')->get();

        $onces = Serials::where('serials', $serial)->get();

        foreach ($onces as $sn)
        {
            $data = [
                'student_code' => $sn->student_code,
                'email' => $sn->email,
                'serials' => $sn->serials
            ];

            return response()->json($data);
        }


    }









}
