<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        $pmb = DB::table('pemberitahuan')
        ->get();
        return view('homeadmin', [
            "title" => "homeadmin",
            'pmb' => $pmb
        ]);
    }
    public function detail_pemberitahuan($id1){
        $pmb = DB::table('pemberitahuan')
        ->where('ID','=',$id1)
        ->get();
        return view('detail_pemberitahuan', [
            "title" => "detailpemberitahuan",
            'pmb' => $pmb,
        ]);
    }
    public function userlogin(){
        $ambil = auth()->user()->id;
        $user = User::where();
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
        $ambil = auth()->user()->id;
        $this->authorize('admin');
        $usr = DB::table('users')
        ->join('role_user','users.id_roleuser','=','role_user.id_roleuser')
        ->get();
        return view('aturuser', [
            "title" => "aturuser",
            'userdata' =>  User::find($ambil),
            'usr' => $usr
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
        $ambil = auth()->user()->id;
        $this->authorize('admin');
        $pmb = DB::table('pemberitahuan')
        ->get();
        return view('aturpemberitahuan', [
            "title" => "aturpemberitahuan",
            'userdata' =>  User::find($ambil),
            'pmb' => $pmb
        ]);
       
    }
   

    public function save_pemberitahuan(Request $request){
        $ambil = auth()->user()->id;
            $userdata =  User::find($ambil);
            DB::table('pemberitahuan')->insert([
                'Tanggal' => date('Y-m-d H:i:s'),
                'Subjek' => $request->subjek,
                'Detail' => $request->detail_pemberitahuan,
        ]);
        return redirect('/aturpemberitahuan');
    }
    public function download()
    {
        return view('downloadadmin', [
            "title" => "download"
        ]);
    }
    public function downloadJK(){
        $file="./download/JuklakNew_Apr21.pdf";
        return Response::download($file);
}
    public function pemberitahuan()
    {
        return view('pemberitahuan', [
            "title" => "pemberitahuan"
        ]);
    }
}