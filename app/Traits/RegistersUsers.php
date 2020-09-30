<?php
namespace  App\Traits;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

trait RegistersUsers
{
    public function showRegisterForm()
    {
        // Check Session
        if (Session::get('send_code')) {
            $data = Session::get('send_code');
            $registration_code = getSerial();
            $username = generateUserName();

            // If Session has send_code then return to Route Switch at register name with value.
            return view('system.auth', ['route' => 'register'], compact('data', 'registration_code', 'username'))
                ->with('success', 'รหัสลงทะเบียนได้ส่งไปยังที่อยู่อีเมล์เรียบร้อย');
        } // If Not follow by condition form  return to normal view to Route Switch at register name without any value.
        else {
            return Redirect::route('verify');
        }
    }
}
