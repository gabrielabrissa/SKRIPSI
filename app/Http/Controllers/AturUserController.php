<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Exception;

class AturUserController extends Controller
{
    public function aturuser()
    {
        $usr = DB::table('users')
            ->join('role_user', 'users.id_roleuser', '=', 'role_user.id_roleuser')
            ->where('users.id_roleuser','=','1')
            ->get();
        return view('aturuser', [
            "title" => "aturuser",
            'usr' => $usr
        ]);
    }
    // public function fetchUser()
    // {
    //     $usr = DB::table('users')
    //         ->join('role_user', 'users.id_roleuser', '=', 'role_user.id_roleuser')
    //         ->where('users.id_roleuser','=','1')
    //         ->get();
    //         return response()->json([
    //             'usr' => $usr,
    //         ]);
    // }

    public function adduser(){
        $ambil = auth()->user()->id;
        $supp = DB::table('sys_supplier')
        ->get();
       
        return view('adduser', [
            "title" => "aturuser",
            'userdata' =>  User::find($ambil),
            'supp' => $supp,
        ]);
    }
    public function getSysSupp(Request $request)
    {
        $suppp_id = $request-> spp_id;

        $data = DB::table('sys_supp_site')
        ->join('sys_supplier','sys_supplier.SUPP_ID','=','sys_supp_site.SUPP_ID')
        ->where('sys_supp_site.SUPP_ID', $suppp_id)
        ->get();

        return response()->json($data);
    }
    public function createUser(Request $request) {
        $data = $request->all();
        DB::beginTransaction();
        try{
            foreach ($data as $d) {
                $user1 = DB::table('sys_supplier')->insertGetId([
                    // 'id' => '',
                    'ID_USER' => $d[''],
                    'ID_ROLEUSER' => '1',
                    'USERNAME' => $d['username'],
                    'USER_EMAIL' => $d['email'],
                    'PASSWORD' => $d[bcrypt('password')],
                    'SUPP_ID' => '2',
                    'RESET_FLAG' => $d['N'],
                    'ACTIVE_FLAG' => $d['Y'],
                    'ORG_ID' =>null,
                    'APPROVED_BY'=> '1',
                    'APPROVED_DATE' => date("Y-m-d"),
                    'CREATED_BY' =>'1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' =>null,
                    'LAST_UPDATED_DATE' =>null,
                ]);
                foreach($d['listSupp'] as $ls){
                    $sys_mapp = DB::table('sys_mapp_supp')->insertGetId([
                         // 'ID2' => '',
                        'USER_ID'=> $user1,
                        'SUPP_SITE_CODE'=> $ls['SUPP_SITE_CODE'],
                        'BRANCH_CODE'=> $ls['BRANCH_CODE'],
                        'DATE'=> date("Y-m-d"),
                        'STATUS'=> 'Y',
                        'TRANSFER_FLAG' => null,
                        ]);
                }
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
        // return view('aturuser', [
        //     "title" => "aturuser",
        // ]);
    }
}

