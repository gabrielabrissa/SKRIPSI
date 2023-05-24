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
        DB::table('users')->insert(
            [
                [
                    'username' => 'admin',
                    'email' => 'admin@admin',
                    'id_roleuser' => DB::table('role_user')->where('nama_role', 'admin')->value('id_roleuser'),
                    'password' => bcrypt('admin'),
                ],
                [
                    'username' => 'supplier',
                    'email' => 'supplier@supplier',
                    'id_roleuser' => DB::table('role_user')->where('nama_role', 'supplier')->value('id_roleuser'),
                    'password' => bcrypt('supplier'),
                ],

            ]
        );
    }
}
