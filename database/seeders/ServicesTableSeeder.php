<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Service 1',
                'description' => 'Description for service 1',
                'image' => 'image1.jpg',
                'price' => 99.99,
                'features' => 'Feature 1, Feature 2',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Service 2',
                'description' => 'Description for service 2',
                'image' => 'image2.jpg',
                'price' => 199.99,
                'features' => 'Feature 3, Feature 4',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
