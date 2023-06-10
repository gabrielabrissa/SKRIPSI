<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SyS_Mapp_Supp_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_mapp_supp')->insert([
            [
                'USER_ID' => '2',
                'SUPP_SITE_CODE' => 'S111',
                'BRANCH_CODE' => '111',
                'DATE' => date("Y-m-d"),
                'STATUS' => 'Y',
                'TRANSFER_FLAG' => null,
                
            ],
            [
                'USER_ID' => '2',
                'SUPP_SITE_CODE' => 'S111',
                'BRANCH_CODE' => '112',
                'DATE' => date("Y-m-d"),
                'STATUS' => 'Y',
                'TRANSFER_FLAG' => null,
                
            ],
            [
                'USER_ID' => '3',
                'SUPP_SITE_CODE' => 'S113',
                'BRANCH_CODE' => '113',
                'DATE' => date("Y-m-d"),
                'STATUS' => 'Y',
                'TRANSFER_FLAG' => null,
                
            ],
            [
                'USER_ID' => '4',
                'SUPP_SITE_CODE' => 'S113',
                'BRANCH_CODE' => '114',
                'DATE' => date("Y-m-d"),
                'STATUS' => 'Y',
                'TRANSFER_FLAG' => null,
                
            ],
    
        ]);
    }
}
