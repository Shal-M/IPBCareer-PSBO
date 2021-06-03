<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/adminpage', function () {
    return view('adminpage');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::post('/login','App\Http\Controllers\UserController@store');

Route::post('/dashboard','App\Http\Controllers\AuthController@proses_login')->name('proses_login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login']], function () {
        Route::get('/dashboard','App\Http\Controllers\UserController@index');
     });
});
