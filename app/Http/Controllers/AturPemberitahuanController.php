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
        DB::table('pemberitahuan')->insert([
            'TANGGAL' => date('Y-m-d H:i:s'),
            'SUBJEK' => $request->subjek,
            'DETAIL' => $request->detail_pemberitahuan,
        ]);
        return redirect('/aturpemberitahuan');
    }

    public function delete_pemberitahuan($id1) {
        DB::table('pemberitahuan')
        ->where('ID',$id1)
        ->delete();
        return redirect('/aturpemberitahuan');
    }
    
}
