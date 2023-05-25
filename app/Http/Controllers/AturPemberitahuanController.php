<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class AturPemberitahuanController extends Controller
{
    public function aturpemberitahuan()
    {
        
        $pmb = DB::table('pemberitahuan')
            ->get();
        return view('aturpemberitahuan', [
            "title" => "aturpemberitahuan",
            'pmb' => $pmb
        ]);
    }

    public function save_pemberitahuan(Request $request)
    {
        $ambil = auth()->user()->id;
        $userdata =  User::find($ambil);
        DB::table('pemberitahuan')->insert([
            'Tanggal' => date('Y-m-d H:i:s'),
            'Subjek' => $request->subjek,
            'Detail' => $request->detail_pemberitahuan,
        ]);
        return redirect('/aturpemberitahuan');
    }
    
}
