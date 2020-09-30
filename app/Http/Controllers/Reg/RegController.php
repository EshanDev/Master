<?php

namespace App\Http\Controllers\Reg;

use App\Models\Serials;
use App\Traits\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegController extends Controller
{

    use RegistersUsers;

    public function index()
    {
        return view('system.auth', ['route' => 'home']);
    }

    public function register(){
        return 'Registration Page.';
    }

    public function create(Request $request){
        return Redirect::route('auth.login')->with('success', '');
    }



    public function created(Request $request)
    {
        $rules = [
            'student_code' => 'required|digits:10|string',
            'student_email' => 'required|email|string|max:255',
        ];
        // Create Validator.
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return back()->withInput()->withErrors(['fails'=>'ไม่สามารถดำเนินการได้ โปรดตรวจทานข้อมูลอีกครั้ง']);
        } else{
            $counts = CountSerials();
            if ($counts == 30){
                return back()->withInput()
                    ->withErrors(['fails' => 'จำนวนผู้ลงทะเบียนครบแล้ว']);
            } else{
                $collection = collect(['student_code' => $request->input('student_code'), 'student_email' => $request->input('student_email')]);
                $serial = getSerial();
                $data = $collection->merge(['registration_code' => $serial]);

                try {
                    $serials = new Serials();
                    $serials->serials = $data['registration_code'];
                    $serials->email = $data['student_email'];
                    $serials->student_code = $data['student_code'];
                    $serials->save();
                    return Redirect::route('auth.register')->with('send_code', $data);
                } catch (\Exception $e){
                    return back()->withInput()
                        ->withErrors(['fails' => 'บันทึกข้อมูลไม่สำเร็จ ฐานข้อมูลเกิดข้อผิดพลาด']);
                }
            }
        }
    }


}
