<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sys_Term_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_term')->insert([
        [
            'TERM_ID' => '10000',
            'TERM_NAME' => '0',
            'TERM_DESC' => 'Immediate',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,
        ],
        [
            'TERM_ID' => '10001',
            'TERM_NAME' => '1',
            'TERM_DESC' => '1 DAYS',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,
        ],
        [
            'TERM_ID' => '10002',
            'TERM_NAME' => '2',
            'TERM_DESC' => '2 DAYS',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,

            
        ],
        [
            'TERM_ID' => '10003',
            'TERM_NAME' => '3',
            'TERM_DESC' => '3 DAYS',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,

            
        ],
        [
            'TERM_ID' => '10004',
            'TERM_NAME' => '4',
            'TERM_DESC' => '4 DAYS',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,

            
        ],
        [
            'TERM_ID' => '10005',
            'TERM_NAME' => '5',
            'TERM_DESC' => '5 DAYS',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,

            
        ],
        [
            'TERM_ID' => '10006',
            'TERM_NAME' => '6',
            'TERM_DESC' => '6 DAYS',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,

            
        ],
        [
            'TERM_ID' => '10007',
            'TERM_NAME' => '7',
            'TERM_DESC' => '7 DAYS',
            'CREATED_BY' => null,
            'CREATION_DATE' => '2023-05-31',
            'LAST_UPDATED_DATE' => null,
            'LAST_UPDATED_BY' => null,

            
        ],
    ]);
    }
}
