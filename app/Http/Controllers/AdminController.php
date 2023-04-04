<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('homeadmin', [
            "title" => "homeadmin"
        ]);
    }
    public function aturhari()
    {
        return view('aturhari', [
            "title" => "aturhari"
        ]);
    }
    public function aturlimit()
    {
        return view('aturlimit', [
            "title" => "aturlimit"
        ]);
    }
    public function aturuser()
    {
        return view('aturuser', [
            "title" => "aturuser"
        ]);
    }
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
    public function kuotaharian()
    {
        return view('kuotaharian', [
            "title" => "kuotaharian"
        ]);
    }
    public function laporanttf()
    {
        return view('laporanttf', [
            "title" => "laporanttf"
        ]);
    }
    public function monitoringfp()
    {
        return view('monitoringfp', [
            "title" => "monitoringfp"
        ]);
    }
    public function aturpemberitahuan()
    {
        return view('aturpemberitahuan', [
            "title" => "aturpemberitahuan"
        ]);
    }
    public function download()
    {
        return view('downloadadmin', [
            "title" => "download"
        ]);
    }
}