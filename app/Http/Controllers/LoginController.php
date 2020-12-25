<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function halamanlogin()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home');
        }
        session()->flash('fail', 'Email atau Password Salah!');
        return back();
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
