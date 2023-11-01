<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView() 
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //ini jika validasi yang benar
        if (Auth::attempt($credentials)) {
            return redirect('/'); 
        }

        //ini jika validasi salah 
        return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');

    }
}
