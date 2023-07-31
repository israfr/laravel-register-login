<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'Login Page'
        ]);
    }

    public function loginaccount(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // dd('Login Berhasil');
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // dd('Login Gagal');

        return back()->with('failed', 'Login Failed');
    }

    public function logoutaccount(Request $request)
    {
        auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
