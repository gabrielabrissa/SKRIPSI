<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class KuotaHarianSupController extends Controller
{
    public function kuotaharian()
    {
        return view('kuotaharian', [
            "title" => "kuotaharian"
        ]);
    }
}
