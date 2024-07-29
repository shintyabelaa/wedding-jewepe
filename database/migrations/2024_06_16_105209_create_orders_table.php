<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id('order_id'); // Assuming order_id is the primary key
            $table->unsignedBigInteger('catalogue_id');
            $table->string('package_name');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->date('wedding_date');
            $table->string('status')->default('pending'); // default to 'requested'
            $table->string('action')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('catalogue_id')->references('catalogue_id')->on('tb_catalogues')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('tb_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_order');
    }
}

