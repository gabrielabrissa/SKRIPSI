<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class DownloadController extends Controller
{
    public function download()
    {
        return view('download', [
            "title" => "download"
        ]);
    }
    public function downloadadmin()
    {
        return view('downloadadmin', [
            "title" => "download"
        ]);
    }
}
