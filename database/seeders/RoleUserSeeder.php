<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            [
                'id_roleuser' => 1,
                'nama_role' => 'supplier',
                'hak_akses' => 1
            ],
            [
                'id_roleuser' => 2,
                'nama_role' => 'admin',
                'hak_akses' => 2
            ],
        ]);
    }
}
