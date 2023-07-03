<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Smalot\PdfParser\Parser;

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

    public function getTtfDataNoFP(Request $request)
    {
        $suppBranchCode = $request->supp_branch_code;
        $ambil = auth()->user()->id;
        $fp = DB::table('sys_supp_site')
        ->join('sys_mapp_supp','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->join('sys_supplier','sys_supplier.SUPP_ID','=','users.SUPP_ID')
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->where('sys_supp_site.SUPP_BRANCH_CODE', $suppBranchCode)
        ->select('sys_supp_site.SUPP_PKP_NUM')
        ->groupBy('sys_supp_site.SUPP_PKP_NUM');

        $data = DB::table('no_faktur')
        ->whereIn('no_faktur.NPWP_PENJUAL',$fp)
        ->get();

        return response()->json($data);
    }
    public function read_qr(Request $request)
    {
        $file = $request->file;
        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($file->path());
        $content = $pdf->getText();
        $explode = explode("\n",$content);
        $cari = preg_grep("/^Kode dan Nomor Seri Faktur Pajak :/i", $explode);
        $cari = array_values($cari);
        $noFaktur = preg_replace("/[^0-9\.\-]/","",$cari);
        return response()->json([
            'no_faktur' => $noFaktur
        ]);
    }

    public function createTtf(Request $request)
    {
        $ambil = auth()->user()->id;
        $data = $request->all();
        foreach ($data as $d) {
            $header = DB::table('ttf_headers')->insertGetId([
                // 'TTF_ID' => '',
                'BRANCH_CODE' => $d['branchcode'],
                'VENDOR_SITE_CODE' => $d['supsitecode'],
                'TTF_NUM' => '',
                'TTF_DATE'=> $d['tanggal_ttf'],
                'TTF_TYPE' => $d['typefp'],
                'TTF_STATUS'=> 'DRAFT',
                'TTF_RETURN_DATE'=> '',
                'TTF_GIRO_DATE'=> '',
                'ORG_ID'=> '',
                'SOURCE' => '',
                'REVIEWED_BY'=> $ambil,
                'REVIEWED_DATE'=> $d['tanggal_ttf'],
                'CREATED_BY'=> $ambil,
                'CREATED_DATE'=> $d['tanggal_ttf'],
                'LAST_UPDATE_DATE'=> $d['tanggal_ttf'],
                'LAST_UPDATE_BY' => $d['tanggal_ttf'],
                'MEMO_NUM' => '',
                'JUMLAH_FP' => $d['jml_fp'],
                'SUM_DPP_FP' => $d['ttfjumFP_DPP'],
                'SUM_TAX_FP' => $d['ttfjumFP_PPN'],
                'JUMLAH_BPB' => '',
                'SUM_DPP_BPB' => $d['ttfsumBPB_DPP'],
                'SUM_TAX_BPB' => $d['ttfsumBPB_PPN'],
                'SELISIH_DPP' => $d['ttfselisihDPP'],
                'SELISIH_TAX' => $d['ttfselisihPPN'],
            ]);
            $ttf_fp = DB::table('ttf_fp')->insert([
            'TTF_FP_ID'=> '',
            'TTF_ID'=> $header,
            'FP_NUM'=> '',
            'FP_TYPE'=> $d['listFP[0].typefp'],
            'FP_DATE'=> $d['tanggal_ttf'],
            'FP_DPP_AMT'=> $d[''],
            'FP_TAX_AMT'=> $d[''],
            'USED_FLAG'=> 'Y',
            'CREATED_BY'=> $ambil,
           'CREATION_DATE'=> $d['tanggal_ttf'],
            'LAST_UPDATE_BY'=> '',
           'LAST_UPDATE_DATE'=> '',
            'TTF_HEADERS_TTF_ID'=> $d[''],
            ]);
       
            DB::table('ttf_lines')->insert([
                // 'TTF_LINE_ID'=> '',
                'TTF_ID'=> $header,
                'TTF_BPB_ID'=> $d[''],
                'TTF_FP_ID'=> $ttf_fp,
                'ACTIVE_FLAG'=> 'Y',
                'CREATION_DATE'=> $d['tanggal_ttf'],
                'CREATED_BY'=> $ambil,
                'LAST_UPDATE_DATE'=> $d['tanggal_ttf'],
                'LAST_UPDATE_BY'=> $d['tanggal_ttf'],
                'TTF_HEADERS_TTF_ID'=> $d[''],
                'TTF_FP_TTF_FP_ID'=> $d[''],
            ]);
        }
        return response()->json(['message' => 'Data Telah di Simpan']);
    }

}
