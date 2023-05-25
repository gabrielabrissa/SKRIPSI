<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MonitoringFileController extends Controller
{
    public function monitoringfp()
    {
        return view('monitoringfp', [
            "title" => "monitoringfp"
        ]);
    }
}
