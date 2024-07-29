<?php

namespace Database\Seeders;

use App\Models\Catalogue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_catalogues')->insert([
            'image' => 'dark.jpg',
            'package_name' => 'Basic Wedding Package',
            'description' => 'This is a sample description for the basic wedding package.',
            'price' => 5000000,
            'status_publish' => 'Y',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
