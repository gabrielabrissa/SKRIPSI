<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class HomeController extends Controller
{
    public function index()
    { $pmb = DB::table('pemberitahuan')
            ->get();
        
        return view('home', [
            "title" => "home",
            'pmb' => $pmb
        ]);
    }

    public function indexadmin()
    { $pmb = DB::table('pemberitahuan')
            ->get();
        
        return view('homeadmin', [
            "title" => "homeadmin",
            'pmb' => $pmb
        ]);
    }

    public function downloadJK(){
        $file="./download/JuklakNew_Apr21.pdf";
        return Response::download($file);
}
}
