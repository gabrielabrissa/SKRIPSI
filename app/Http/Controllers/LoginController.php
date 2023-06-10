<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
                'USERNAME' => 'required',
                'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->role->ID_ROLEUSER == 1){
                return redirect() ->intended('/home');
            }
            else{
                return redirect() ->intended('/homeadmin');
            }

        }
        return back()->with('logineror', 'Login Gagal !');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
