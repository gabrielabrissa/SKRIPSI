<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sys_Supp_Site_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_supp_site')->insert(
            [
                [
                    'SUPP_ID' => '1',
                    'SUPP_SITE_CODE' => 'S111',
                    'SUPP_SITE_ALT_NAME' => 'PT Respati',
                    'SUPP_BRANCH_CODE' => '111',
                    'SUPP_ADDR_LINE1' => 'Jalan Pangeran Sogiri',
                    'SUPP_ADDR_LINE2' => null,
                    'SUPP_ADDR_LINE3' => null,
                    'SUPP_ADDR_LINE4' => null,
                    'SUPP_ADDR_CITY' => 'Bogor',
                    'SUPP_ADDR_PHONE' => '62-251-8353944',
                    'SUPP_ADDR_PROVINCE' => 'Jawa Barat',
                    'SUPP_TERM_ID' =>  '10000',
                    'SUPP_PAY_GROUP' => 'IDM-NHD',
                    'SUPP_PAYMENT_METHOD' => null,
                    'SUPP_TYPE' => null,
                    'SUPP_PKP_NUM' => '3121',
                    'SUPP_PKP_NAME' => 'PT RESPATI',
                    'SUPP_PKP_ADDR1' => 'Jalan Pangeran Sogiri',
                    'SUPP_PKP_ADDR2' => 'Bogor',
                    'CREATED_BY' => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],
                [
                    'SUPP_ID' => '1',
                    'SUPP_SITE_CODE' => 'S111',
                    'SUPP_SITE_ALT_NAME' => 'PT Respati',
                    'SUPP_BRANCH_CODE' => '112',
                    'SUPP_ADDR_LINE1' => 'Jalan Kamboja',
                    'SUPP_ADDR_LINE2' => null,
                    'SUPP_ADDR_LINE3' => null,
                    'SUPP_ADDR_LINE4' => null,
                    'SUPP_ADDR_CITY' => 'Banten',
                    'SUPP_ADDR_PHONE' => '62-251-656456',
                    'SUPP_ADDR_PROVINCE' => 'Jawa Barat',
                    'SUPP_TERM_ID' =>  '10002',
                    'SUPP_PAY_GROUP' => 'IDM-NHD',
                    'SUPP_PAYMENT_METHOD' => null,
                    'SUPP_TYPE' => null,
                    'SUPP_PKP_NUM' => '3111',
                    'SUPP_PKP_NAME' => 'PT Respati',
                    'SUPP_PKP_ADDR1' => 'Jalan Kamboja',
                    'SUPP_PKP_ADDR2' => 'Banten',
                    'CREATED_BY' => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],
                [
                    'SUPP_ID' => '2',
                    'SUPP_SITE_CODE' => 'S113',
                    'SUPP_SITE_ALT_NAME' => 'PT Sinar Mekar',
                    'SUPP_BRANCH_CODE' => '113',
                    'SUPP_ADDR_LINE1' => 'Jalan Nitipuran',
                    'SUPP_ADDR_LINE2' => 'Sowosewu',
                    'SUPP_ADDR_LINE3' => null,
                    'SUPP_ADDR_LINE4' => null,
                    'SUPP_ADDR_CITY' => 'Bantul',
                    'SUPP_ADDR_PHONE' => '62-251-1233232',
                    'SUPP_ADDR_PROVINCE' => 'DIY',
                    'SUPP_TERM_ID' =>  '10000',
                    'SUPP_PAY_GROUP' => 'IDM-NHD',
                    'SUPP_PAYMENT_METHOD' => null,
                    'SUPP_TYPE' => null,
                    'SUPP_PKP_NUM' => '3131',
                    'SUPP_PKP_NAME' => 'PT Sinar Mekar',
                    'SUPP_PKP_ADDR1' => 'Jalan Nitipuran',
                    'SUPP_PKP_ADDR2' => 'Bantul',
                    'CREATED_BY' => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],
                [
                    'SUPP_ID' => '2',
                    'SUPP_SITE_CODE' => 'S113',
                    'SUPP_SITE_ALT_NAME' => 'PT Sinar Mekar',
                    'SUPP_BRANCH_CODE' => '114',
                    'SUPP_ADDR_LINE1' => 'Jalan Nyi Tjondrolukito',
                    'SUPP_ADDR_LINE2' => 'Sowosewu',
                    'SUPP_ADDR_LINE3' => null,
                    'SUPP_ADDR_LINE4' => null,
                    'SUPP_ADDR_CITY' => 'Sleman',
                    'SUPP_ADDR_PHONE' => '62-251-8353923',
                    'SUPP_ADDR_PROVINCE' => 'DIY',
                    'SUPP_TERM_ID' =>  '10001',
                    'SUPP_PAY_GROUP' => 'IDM-NHD',
                    'SUPP_PAYMENT_METHOD' => null,
                    'SUPP_TYPE' => null,
                    'SUPP_PKP_NUM' => '3132',
                    'SUPP_PKP_NAME' => 'PT Sinar Mekar',
                    'SUPP_PKP_ADDR1' => 'Jalan Nyi Tjondrolukito',
                    'SUPP_PKP_ADDR2' => 'Sleman',
                    'CREATED_BY' => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],

            ]
        );
    }
}
