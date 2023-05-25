<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class DataTTFController extends Controller
{
    public function datattf()
    {
        return view('datattf', [
            "title" => "datattf"
        ]);
    }
    public function datasup()
    {
        return view('datasup', [
            "title" => "datattf"
        ]);
    }
    public function datalampfp()
    {
        return view('datalampfp', [
            "title" => "datattf"
        ]);
    }
}
