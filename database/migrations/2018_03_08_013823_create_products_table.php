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
            $table->string('categorie_id')->nullable();
            $table->string('colore_id')->nullable();
            $table->double('cost_price'); //, 8, 2
            $table->double('sale_price_before');
            $table->double('sale_price');
            $table->double('shipping_price');
            $table->double('bulk_weight');
            $table->bigInteger('number_packages');
          //  $table->string('color');
            $table->bigInteger('stock');
            $table->longText('description')->nullable();
            $table->string('brand');
            $table->string('model');
            $table->longText('features');
            $table->string('payment_cuba');
            $table->string('sku');
            $table->string('seotitle');
            $table->longText('seodescription');
            $table->string('seokeywords');
            $table->bigInteger('condition');
            $table->string('products_id');
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
