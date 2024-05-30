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
        User::insert([
           [
               'name' => 'Admin',
               'email' => 'admin@admin.com',
               'role' => 'admin',
               'password' => bcrypt('password'),
           ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'role' => 'user',
                'password' => bcrypt('password'),
            ]
        ]);
    }
}
