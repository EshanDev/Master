<?php
namespace App\Traits;
use Illuminate\Http\Request;
trait VerifyRegistrationCode
{
    public function showVerifyRegistrationForm()
    {
        return view('system.auth',['route'=>'verify_registration_code']);
    }
















    // Verisy Registration Code.



    public function verify(Request $request)
    {
        $serial = $request->input('registration_code');
        $serials = "B65FD-F0F1A-F9C33-F6D9D";
        if($serial == $serials)
        {
          echo $serial;
        }
        //$users = Serials::all()->where('serials', 'B65FD-F0F1A-F9C33-F6D9D')->first();
        //return response()->json($users);
    }









}
