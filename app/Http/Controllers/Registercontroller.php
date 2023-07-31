<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Registercontroller extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Register Page'
        ]);
    }

    public function registeraccount(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'username' => 'required|unique:users|min:8',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd($validatedData);
        User::create($validatedData);
        return redirect(Route('login'))->with('success', 'Registration success !, please login');
    }
}
