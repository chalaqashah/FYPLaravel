<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = 'Admin2 Doe';
        $user->email = 'admin2@doe.com';
        $user->password = bcrypt('password');
        $user->assignRole('admin');
        $user->save();
    }
}
