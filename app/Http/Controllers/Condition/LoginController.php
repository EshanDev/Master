<?php

namespace App\Http\Controllers\Condition;

use App\Http\Controllers\Controller;
use App\Traits\LoginStudents;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use LoginStudents;

    /**
     * Create a new Controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
