<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_users')->insert([
            'user_id' => 1, // Assuming 'user_id' is the primary key
            'name' => 'Admin User',
            'username' => 'admin',
            'password' => Hash::make('password'), // Encrypt the password
            'created_at' => now(), // Insert current timestamp
            'updated_at' => now(), //
        ]);
    }
}
