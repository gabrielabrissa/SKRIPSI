<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "home",
            'pmb' => []
        ]);
    }
    public function userlogin(){
        $ambil = auth()->user()->id;
        $user = User::where();
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
    public function downloadJK(){
        $file="./download/JuklakNew_Apr21.pdf";
        return Response::download($file);
}
}
