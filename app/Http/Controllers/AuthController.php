<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Matcher\Type;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (AuthController::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        ession::flash('status','failed');
        Session::flash('massage','login lagi');

        return redirect('login');

    }
}
