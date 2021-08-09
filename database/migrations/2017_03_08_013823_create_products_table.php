<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->double('cost_price', 8, 2);
            $table->double('sale_price_before');
            $table->double('sale_price');
            $table->double('shipping_price');
            $table->double('bulk_weight');
            $table->string('color');
            $table->bigInteger('stock');
            $table->longText('description');
            $table->string('brand');
            $table->string('model');
            $table->longText('features');
            $table->string('payment_cuba');
            $table->string('sku');
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
        Schema::dropIfExists('products');
    }
}
