<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_settings')->insert([
            'website_name' => 'JeWePe Wedding Organizer',
            'phone_number1' => '081234567890',
            'phone_number2' => '081234567891',
            'email1' => 'info@jewepe.com',
            'email2' => 'support@jewepe.com',
            'address' => 'Jl. Sudirman No. 123, Jakarta, Indonesia',
            'maps' => 'https://maps.google.com/example',
            'logo' => 'logo.png',
            'facebook_url' => 'https://facebook.com/jewepe',
            'instagram_url' => 'https://instagram.com/jewepe',
            'youtube_url' => 'https://youtube.com/jewepe',
            'header_business_hour' => 'Monday - Friday: 9 AM - 5 PM',
            'time_business_hour' => '9:00 AM - 5:00 PM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
