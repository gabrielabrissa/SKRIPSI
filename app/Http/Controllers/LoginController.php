<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function userlogin(){
        $ambil = auth()->user()->id;
        $user = User::where();
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->role->hak_akses == 1){
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
