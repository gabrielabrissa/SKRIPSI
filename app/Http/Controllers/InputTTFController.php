<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Exception;
use Smalot\PdfParser\Parser;
use PDF;

class InputTTFController extends Controller{

    public function pilihCabang($id2){
        $ambil = auth()->user()->id;
        $cabang = DB::table('sys_supp_site')
        ->join('sys_mapp_supp','sys_mapp_supp.BRANCH_CODE','=','sys_supp_site.SUPP_BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->where ('sys_supp_site.SUPP_SITE_ID','=',$id2)
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->get();
        return response()->json($cabang);
    }
    public function fetchTTF(){
        $ambil = auth()->user()->id;

        $ttf = DB::table('ttf_headers')
        ->join('sys_supp_site','sys_supp_site.SUPP_BRANCH_CODE','=','ttf_headers.BRANCH_CODE')
        ->where ('ttf_headers.CREATED_BY','=',$ambil)
        ->get();
        return response()->json([
            'ttf' => $ttf,
        ]);
    }
    public function fetchCabang(){
        $ambil = auth()->user()->id;

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
        return response()->json([
            'ttf' => $cbg,
        ]);
    }
    public function inputttf(){
        return view('inputttf', [
            "title" => "inputttf",
        ]);
    }
    public function getSysSuppSite($id){
        $data = DB::table('sys_supp_site')
        ->where('SUPP_BRANCH_CODE', $id)
        ->first();
        return response()->json($data);
    }
    public function getTtfDataBpb($id) {
        // $suppBranchCode = $request->supp_branch_code;

        $data = DB::table('ttf_data_bpb')
        ->where('BRANCH_CODE', $id)
        ->where('USED_FLAG','=','N')
        ->get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function getDetailFP($id) {

        $data = DB::table('no_faktur')
        ->where('NOMOR_FAKTUR', $id)
        ->first();

        return response()->json([
            'data' => $data
        ]);
    }
    public function getTtfDataNoFP($id) {
        $ambil = auth()->user()->id;
        $fp = DB::table('sys_supp_site')
        ->join('sys_mapp_supp','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->join('sys_supplier','sys_supplier.SUPP_ID','=','users.SUPP_ID')
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->where('sys_supp_site.SUPP_BRANCH_CODE', $id)
        ->select('sys_supp_site.SUPP_PKP_NUM')
        ->groupBy('sys_supp_site.SUPP_PKP_NUM');

        $data = DB::table('no_faktur')
        ->whereIn('no_faktur.NPWP_PENJUAL',$fp)
        ->get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function read_qr(Request $request) {
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
    public function createTtf(Request $request) {
        $ambil = auth()->user()->id;
        $data = $request->all();
        $jumBPB =0;

        // return response()->json($data);
        DB::beginTransaction();
        try{
            foreach ($data as $d) {
                $ttf_num = mt_rand(1000000,9999999);
                $header = DB::table('ttf_headers')->insertGetId([
                    // 'TTF_ID' => '',
                    'BRANCH_CODE' => $d['branchcode'],
                    'VENDOR_SITE_CODE' => $d['supsitecode'],
                    'TTF_NUM' => "23039".$ttf_num,
                    'TTF_DATE'=> now()->format('Y-m-d'),
                    'TTF_TYPE' => $d['typefp_ttf'],
                    'TTF_STATUS'=> 'DRAFT',
                    'TTF_RETURN_DATE'=> now()->format('Y-m-d'),
                    'TTF_GIRO_DATE'=> now()->format('Y-m-d'),
                    'ORG_ID'=> null,
                    'SOURCE' => '',
                    'REVIEWED_BY'=> $ambil,
                    'REVIEWED_DATE'=> now()->format('Y-m-d'),
                    'CREATED_BY'=> $ambil,
                    'CREATED_DATE'=> now()->format('Y-m-d'),
                    'LAST_UPDATE_DATE'=> now()->format('Y-m-d'),
                    'LAST_UPDATE_BY' => $ambil,
                    'MEMO_NUM' =>  "23039".$ttf_num,
                    'JUMLAH_FP' => $d['jml_fp'],
                    'SUM_DPP_FP' => $d['ttfjumFP_DPP'],
                    'SUM_TAX_FP' => $d['ttfjumFP_PPN'],
                    'JUMLAH_BPB' => 0,
                    'SUM_DPP_BPB' => $d['ttfsumBPB_DPP'],
                    'SUM_TAX_BPB' => $d['ttfsumBPB_PPN'],
                    'SELISIH_DPP' => $d['ttfselisihDPP'],
                    'SELISIH_TAX' => $d['ttfselisihPPN'],
                ]);
                foreach($d['listFP'] as $fp){
                    $ttf_fp = DB::table('ttf_fp')->insert([
                        'TTF_ID'=> $header,
                        'FP_NUM'=> $fp['noFaktur'],
                        'FP_TYPE'=> $fp['typefp'],
                        'FP_DATE'=> now()->format('Y-m-d'),
                        'FP_DPP_AMT'=> $fp['DPP_FP'],
                        'FP_TAX_AMT'=> $fp['PPN_FP'],
                        'USED_FLAG'=> 'Y',
                        'CREATED_BY'=> $ambil,
                       'CREATION_DATE'=> now()->format('Y-m-d'),
                        'LAST_UPDATE_BY'=>  $ambil,
                       'LAST_UPDATE_DATE'=> now()->format('Y-m-d'),
                        'TTF_HEADERS_TTF_ID'=> $header
                        ]);
                        foreach($fp['listOfBPB'] as $bpb){
                            $jumBPB= $jumBPB +1;
                            DB::table('ttf_lines')->insert([
                                // 'TTF_LINE_ID'=> '',
                                'TTF_ID'=> $header,
                                'TTF_BPB_ID'=> $bpb['BPB_ID'],
                                'TTF_FP_ID'=> $ttf_fp,
                                'ACTIVE_FLAG'=> 'Y',
                                'CREATION_DATE'=> now()->format('Y-m-d'),
                                'CREATED_BY'=> $ambil,
                                'LAST_UPDATE_DATE'=> now()->format('Y-m-d'),
                                'LAST_UPDATE_BY'=>  $ambil,
                                'TTF_HEADERS_TTF_ID'=> $header,
                                'TTF_FP_TTF_FP_ID'=> $ttf_fp,
                            ]);
                            DB::table('ttf_data_bpb')
                            ->where('BPB_ID',$bpb['BPB_ID'])
                            ->update(['USED_FLAG'=>'Y']);
                        }
                }
                DB::table('ttf_headers')
                ->where('TTF_ID', $header)
                ->update(['JUMLAH_BPB' => $jumBPB]);
            }
            DB::commit();
        }
        catch(Exception $e){
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()],500);
        }
        return response()->json([
            'message' => 'Data Telah Disimpan',
        ]);
    }
    public function submitTTF($id) {
        DB::table('ttf_headers')
        ->where('TTF_ID',$id)
        ->update([
            'TTF_STATUS' => "SUBMITTED"
        ]);
        return response()->json([
            'message' => 'SUCCESS'
        ]);
    }
    public function deleteTTF($id) {
        $data = DB::table('ttf_lines')
        ->where('TTF_ID',$id)
        ->get();
        for($a= 0; $a < count($data); $a++){
            DB::table('ttf_data_bpb')
            ->where('BPB_ID',$data[$a]->TTF_BPB_ID)
            ->update(['USED_FLAG'=>'N']);
        }

        DB::table('ttf_fp')
        ->where('TTF_ID',$id)
        ->delete();

        DB::table('ttf_lines')
        ->where('TTF_ID',$id)
        ->delete();

        DB::table('ttf_headers')
        ->where('TTF_ID',$id)
        ->delete();
        
        return response()->json([
            'message' => 'SUCCESS'
        ]);
    }
    public function cetakTTF($id1) {
        $ttf = DB::table('ttf_headers')
        ->join('ttf_fp','ttf_fp.TTF_ID','=','ttf_headers.TTF_ID')
        ->join('ttf_lines','ttf_lines.TTF_ID','=','ttf_headers.TTF_ID')
        ->where('ttf_headers.TTF_ID',$id1)
        ->get();
        $pdf = PDF::loadView('cetakttf',[
            'ttf'=>$ttf
        ]);
        return $pdf->stream();
        // return $pdf->download('ttf-pdf');
    }
}
