<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clients')->insert([
            'name' => 'John Doe',
            'address' => '123 Main St',
            'phone' => '555-1234',
            'email' => 'john@doe.com']);

        DB::table('clients')->insert([
            'name' => 'Jane Doe',
            'address' => '456 Elm St',
            'phone' => '555-5678',
            'email' => 'jane@doe.com']);
    }
}
