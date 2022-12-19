<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function login(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard')->with('toast_success', 'Berhasil Login!');
        }
        return redirect('/')->with('toast_error', 'Username atau Password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('toast_success', 'Anda telah Logout');
    }
}
