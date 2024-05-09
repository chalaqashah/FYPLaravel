<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cases')->insert([
            'case_number' => 'C001',
            'date' => '2024-05-09',
            'client_id' => '1',
            'case_status' => 'Open',
        ]);

        DB::table('cases')->insert([
            'case_number' => 'C002',
            'date' => '2024-05-09',
            'client_id' => '2',
            'case_status' => 'Open',
        ]);
    }
}
