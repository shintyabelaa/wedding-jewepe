<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_settings', function (Blueprint $table) {
            $table->id('setting_id'); // Assuming setting_id is the primary key
            $table->string('website_name');
            $table->string('phone_number1');
            $table->string('phone_number2')->nullable();
            $table->string('email1');
            $table->string('email2')->nullable();
            $table->string('address');
            $table->string('maps')->nullable();
            $table->string('logo')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('header_business_hour')->nullable();
            $table->string('time_business_hour')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_settings');
    }
}
