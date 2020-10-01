<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cache_clear', function(){
    Artisan::call('cache:clear');
    return "Cache is Cleared";
});

Route::get('/serials_drop', function(){
    DB::table('serials')->truncate();
    return "ลบข้อมูลเรียบร้อย";
});
Auth::Routes();

Route::get('/serials', 'Reference\DatabaseController@getSerials');

