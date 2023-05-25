<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputTTFController extends Controller
{
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
}
