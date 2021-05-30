<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            // $isChairman = Chairman::where('c_nim', $user->nim)->get();

            // if (count($isChairman)) {
            //     return redirect()->intended('dashboard');  
            // }
            return redirect()->intended('User.userhome');  
        }

        return view('login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],
    
        [
            'email.required'=>'Email harus diisi',
            'password.required'=>'Password harus diisi',
        ]);

        $user_login = $request->only('email', 'password');

        if (Auth::attempt($user_login, true)) {
            $user = Auth::user();
            // return($user);
            return redirect('User.userhome');
        }

        return redirect('login')->withInput()->withErrors(['login_gagal' => 'email atau password anda salah!']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
