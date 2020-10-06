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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('product_name');
            $table->string('address');
            $table->integer('phone');
            $table->string('email');
            $table->string('image');
            $table->longText('description');
            $table->integer('user_id');
            $table->integer('rating_id');
            $table->integer('category_id');
            $table->integer('quantity');
            $table->integer('reviews')->default(0);
            $table->float('price');
            $table->float('total_price');
            $table->integer('order_status_id')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
