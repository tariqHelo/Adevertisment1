<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostAdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_ad', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('category_id');
            $table->string('city');
            $table->string('price');
            $table->string('image');
            $table->string('description');
            $table->string('model');
            $table->string('quantity');
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
        Schema::dropIfExists('post_ad');
    }
}
