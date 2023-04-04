<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "home"
        ]);
    }
    public function inputttf()
    {
        return view('inputttf', [
            "title" => "inputttf"
        ]);
    }
    public function inputfp()
    {
        return view('inputfp', [
            "title" => "inputttf"
        ]);
    }
    public function download()
    {
        return view('download', [
            "title" => "download"
        ]);
    }
}
