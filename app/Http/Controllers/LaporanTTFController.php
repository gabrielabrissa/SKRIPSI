<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
class LaporanTTFController extends Controller
{
    public function laporanttf()
    {
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
        ->get();

        $ttf = DB::table('ttf_headers')
        ->join('sys_supp_site','sys_supp_site.SUPP_BRANCH_CODE','=','ttf_headers.BRANCH_CODE')
        ->join('sys_mapp_supp','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->get();


        return view('laporanttf', [
            "title" => "laporanttf",
            'ttf' => $ttf,
        ]);
    }
}
