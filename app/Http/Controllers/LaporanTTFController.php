<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
class LaporanTTFController extends Controller
{
    public function laporanttf()
    {
        return view('laporanttf', [
            "title" => "laporanttf"
        ]);
    }
}
