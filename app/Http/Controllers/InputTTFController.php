<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class InputTTFController extends Controller
{
    public function pilihCabang($id2)
    {
        $ambil = auth()->user()->id;
        $cabang = DB::table('sys_supp_site')
        ->join('sys_mapp_supp','sys_mapp_supp.BRANCH_CODE','=','sys_supp_site.SUPP_BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->where ('sys_supp_site.SUPP_SITE_ID','=',$id2)
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->get();
        return response()->json($cabang);
    }

    public function inputttf()
    {
        $ambil = auth()->user()->id;
        //pilih cabang
        $cbg2 = DB::table('ttf_data_bpb')
        ->select('BRANCH_CODE', DB::raw('count(BRANCH_CODE) as jumlah'))
        ->where('USED_FLAG','=','N')
        ->groupBy('ttf_data_bpb.BRANCH_CODE');

        $cbg = DB::table('sys_mapp_supp')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->join('sys_supp_site','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->joinSub($cbg2,'jum', function(JoinClause $join) {
            $join->on('sys_mapp_supp.BRANCH_CODE','=','jum.BRANCH_CODE');
        })
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->get();

        //pilih bpb
        $bpb = DB::table('ttf_data_bpb')
        ->join('sys_mapp_supp','ttf_data_bpb.BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->where ('ttf_data_bpb.USED_FLAG','=','N')
        ->get();

        //pilih bpb tmp
        $bpb2 = DB::table('ttf_data_bpb')
        ->join('sys_mapp_supp','ttf_data_bpb.BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->where ('ttf_data_bpb.USED_FLAG','=','Y')
        ->get();

        return view('inputttf', [
            "title" => "inputttf",
            'cbg' => $cbg,
            'bpb' => $bpb,
            'bpb2' => $bpb2
        ]);
    }

    public function getSysSuppSite(Request $request)
    {
        $suppBranchCode = $request->supp_branch_code;

        $data = DB::table('sys_supp_site')
        ->where('SUPP_BRANCH_CODE', $suppBranchCode)
        ->first();

        return response()->json($data);
    }

    public function getTtfDataBpb(Request $request)
    {
        $suppBranchCode = $request->supp_branch_code;

        $data = DB::table('ttf_data_bpb')
        ->where('BRANCH_CODE', $suppBranchCode)
        ->get();

        return response()->json($data);
    }
}
