<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->string('name_product')->nullable();
            $table->string('category_product')->nullable();
            $table->string('cant_product')->nullable();
            $table->string('price_product')->nullable();
            $table->string('sale_price_product')->nullable();
            $table->string('save_product')->nullable();
            $table->string('model_product')->nullable();
            $table->string('color_product')->nullable();
            $table->string('sku_product')->nullable();
            $table->string('brand_product')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
