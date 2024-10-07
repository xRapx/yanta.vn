<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Regular User',
                'email' => 'user@gmail.com',
                'phone' => '0987654321',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
                
            ],
            [
                'name' => 'Regular Admin',
                'email' => 'admin@gmail.com',
                'phone' => '0987654321',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),      
            ],
            [
                'name' => 'Regular User 1',
                'email' => 'user1@gmail.com',
                'phone' => '0987654321',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
                
            ],
        ]);
    }
}
