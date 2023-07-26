<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class DataTTFController extends Controller
{
    public function datasup()
    {
        $sup = DB::table('sys_supplier')
        ->get();


        return view('datasup', [
            "title" => "datasup",
            'sup' => $sup,
        ]);
    }
        
   
    
}
