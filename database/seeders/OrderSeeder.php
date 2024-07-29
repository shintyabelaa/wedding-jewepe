<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_order')->insert([
            'catalogue_id' => 1,
            'name' => 'John Doe',
            'package_name' => 'Basic Wedding Package',
            'email' => 'john.doe@example.com',
            'phone_number' => '1234567890',
            'wedding_date' => '2024-12-01',
            'status' => 'pending',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
