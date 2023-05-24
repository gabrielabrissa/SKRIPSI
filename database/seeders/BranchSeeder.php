<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->truncate();

        DB::table('branches')->insert([
            [
                'branch_org_id' => null,
                'branch_code' => '0001',
                'branch_name' => 'Head Office',
                'branch_tax_code' => '000000000000',
                'active_flag ' => "Y",
                'branch_unit_code' => '0001',
                'branch_npwp_num' => '000000000000000',
                'unit_id' => null,
                'created_by' => 1,
                'created_at' => now(),
                'last_updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'branch_org_id' => null,
                'branch_code' => '0002',
                'branch_name' => 'Branch Office',
                'branch_tax_code' => '000000000002',
                'active_flag ' => "Y",
                'branch_unit_code' => '0002',
                'branch_npwp_num' => '000000000000002',
                'unit_id' => null,
                'created_by' => 1,
                'created_at' => now(),
                'last_updated_by' => 1,
                'updated_at' => now(),
            ],
        ]);
    }
}
