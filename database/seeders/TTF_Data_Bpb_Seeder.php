<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TTF_Data_Bpb_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ttf_data_bpb')->insert([
            [
                'BPB_ID' => '111',
                'BPB_NUMBER' => 'S111BPB0019991',
                'BPB_DATE' => '2023-05-25',
                'BPB_DPP' => '100000',
                'BPB_TAX' => '11000',
                'NO_REF' => '888888882121',
                'TGL_REF' => date("Y-m-d"),
                'BRANCH_CODE' => '111',
                'VENDOR_SITE_ID' => '1',
                'VENDOR_SITE_CODE' => 'S111',
                'USED_FLAG' => 'N',
                'LAST_UPDATE_DATE' => '2023-05-31',
                'LAST_UPDATE_BY' => '1',
            ],
            [
                'BPB_ID' => '112',
                'BPB_NUMBER' => 'S111BPB0019991',
                'BPB_DATE' => '2023-05-25',
                'BPB_DPP' => '100000',
                'BPB_TAX' => '11000',
                'NO_REF' => '888888882121',
                'TGL_REF' => date("Y-m-d"),
                'BRANCH_CODE' => '111',
                'VENDOR_SITE_ID' => '1',
                'VENDOR_SITE_CODE' => 'S111',
                'USED_FLAG' => 'N',
                'LAST_UPDATE_DATE' => '2023-05-31',
                'LAST_UPDATE_BY' => '1',
            ],
            [
                'BPB_ID' => '112',
                'BPB_NUMBER' => 'S111BPB0019882',
                'BPB_DATE' => '2023-05-24',
                'BPB_DPP' => '100000',
                'BPB_TAX' => '0',
                'NO_REF' => '888878882121',
                'TGL_REF' => date("Y-m-d"),
                'BRANCH_CODE' => '112',
                'VENDOR_SITE_ID' => '2',
                'VENDOR_SITE_CODE' => 'S111',
                'USED_FLAG' => 'N',
                'LAST_UPDATE_DATE' => '2023-05-31',
                'LAST_UPDATE_BY' => '1',
            ],
            [
                'BPB_ID' => '113',
                'BPB_NUMBER' => 'S113BPB0019966',
                'BPB_DATE' => '2023-05-26',
                'BPB_DPP' => '10000',
                'BPB_TAX' => '1100',
                'NO_REF' => '888888882122',
                'TGL_REF' => date("Y-m-d"),
                'BRANCH_CODE' => '113',
                'VENDOR_SITE_ID' => '1',
                'VENDOR_SITE_CODE' => 'S113',
                'USED_FLAG' => 'N',
                'LAST_UPDATE_DATE' => '2023-05-31',
                'LAST_UPDATE_BY' => '1',
            ]
        ]);
    }
}
