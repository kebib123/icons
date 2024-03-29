<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->longText('description');
            $table->string('uploader')->nullable();
            $table->boolean('image_type')->default(0);
            $table->string('license')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_new')->default(0);
            $table->boolean('is_rising')->default(0);
            $table->boolean('is_top')->default(0);
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
        Schema::dropIfExists('images');
    }
}
