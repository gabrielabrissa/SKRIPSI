<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(
            [
                [
                    'ID_ROLEUSER' => DB::table('role_user')->where('nama_role', 'admin')->value('id_roleuser'),
                    'USERNAME' => 'Admin',
                    'USER_EMAIL' => 'admin1@admin.com',
                    'PASSWORD' => bcrypt('123456'),
                    'SUPP_ID' => null,
                    'ORG_ID' => null,
                    'APPROVED_BY' => '1',
                    'APPROVED_DATE' => date("Y-m-d"),
                    'CREATED_BY'  => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],
                [                
                    'ID_ROLEUSER' => DB::table('role_user')->where('nama_role', 'supplier')->value('id_roleuser'),
                    'USERNAME' => 'Supp2',
                    'USER_EMAIL' => 'supplier1@supp.com',
                    'PASSWORD' => bcrypt('123456'),
                    'SUPP_ID' => '1',
                    'ORG_ID' => null,
                    'APPROVED_BY' => '1',
                    'APPROVED_DATE' => date("Y-m-d"),
                    'CREATED_BY'  => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],
                [               
                    'ID_ROLEUSER' => DB::table('role_user')->where('nama_role', 'supplier')->value('id_roleuser'),
                    'USERNAME' => 'Supp3',
                    'USER_EMAIL' => 'supplier2@supp2.com',
                    'PASSWORD' => bcrypt('123456'),
                    'SUPP_ID' => '2',
                    'ORG_ID' => null,
                    'APPROVED_BY' => '1',
                    'APPROVED_DATE' => date("Y-m-d"),
                    'CREATED_BY'  => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],
                [                    
                    
                    'ID_ROLEUSER' => DB::table('role_user')->where('nama_role', 'supplier')->value('id_roleuser'),
                    'USERNAME' => 'Supp4',
                    'USER_EMAIL' => 'supplier3@supp3.com',
                    'PASSWORD' => bcrypt('123456'),
                    'SUPP_ID' => '2',
                    'ORG_ID' => null,
                    'APPROVED_BY' => '1',
                    'APPROVED_DATE' => date("Y-m-d"),
                    'CREATED_BY'  => '1',
                    'CREATION_DATE' => date("Y-m-d"),
                    'LAST_UPDATED_BY' => null,
                    'LAST_UPDATED_DATE' => null,
                ],

            ]
        );
    }
}
