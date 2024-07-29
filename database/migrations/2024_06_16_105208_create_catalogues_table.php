<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_catalogues', function (Blueprint $table) {
            $table->id('catalogue_id'); // Assuming catalogue_id is the primary key
            $table->string('image')->nullable();
            $table->string('package_name');
            $table->text('description');
            $table->integer('price');
            $table->string('status_publish')->default('N'); // default to 'N' (not published)
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes(); // to enable soft deletes if you are using them

            // Add foreign key constraint if user_id references id on users table
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
        Schema::dropIfExists('tb_catalogues');
    }
}
