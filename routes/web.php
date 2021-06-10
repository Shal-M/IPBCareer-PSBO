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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/adminpage', function () {
    return view('adminpage');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/adminsignup', function () {
    return view('adminsignup');
});

Route::get('/adminsignup', function () {
    return view('adminsignup');
});

Route::get('/userloginpage', function () {
    return view('login');
});

Route::get('/homeadmin', function () {
    return view('homeadmin');
});

Route::get('/usersignuppage', function () {
    return view('signup');
});

Route::post('/login','App\Http\Controllers\UserController@store');

Route::post('/dashboard','App\Http\Controllers\AuthController@proses_login')->name('proses_login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login']], function () {
        Route::get('/dashboard','App\Http\Controllers\UserController@index');
     });
});



#Employer
Route::post('/adminsignup','App\Http\Controllers\EmployerController@store');

Route::post('/admindashboard','App\Http\Controllers\AuthController@proses_loginemployer')->name('proses_loginemployer');

Route::group(['middleware'=>'employer'], function () {
    Route::group(['middleware' => ['cek_login_employer']], function () {
        Route::get('/admindashboard','App\Http\Controllers\EmployerController@index');
     });
});
