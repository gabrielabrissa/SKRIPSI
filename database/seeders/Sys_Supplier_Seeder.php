<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sys_Supplier_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_supplier')->insert([
            [
                // 'SUPP_ID' => ,
                'SUPP_CODE' => '1111',
                'SUPP_NAME' => 'PT RESPATI',
                'SUPP_EMAIL' => 'respati@respati.com',
                'CREATED_BY' => null,
                'CREATION_DATE' => date("Y-m-d"),
                'LAST_UPDATE_DATE' => null,
                'LAST_UPDATE_BY' => null,
                
            ],
            [
                // 'SUPP_ID' => '',
                'SUPP_CODE' => '1112',
                'SUPP_NAME' => 'PT Sinar Mekar',
                'SUPP_EMAIL' => 'sinarmekar@sinarmekar.com',
                'CREATED_BY' => null,
                'CREATION_DATE' => date("Y-m-d"),
                'LAST_UPDATE_DATE' => null,
                'LAST_UPDATE_BY' => null,
            ],
        ]);
    }
}
