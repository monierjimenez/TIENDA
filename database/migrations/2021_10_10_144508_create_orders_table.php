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
            $table->enum('paymentstatus', ['PENDING', 'PAID'])->default('PENDING');
            $table->enum('orderstatus', ['CREATED', 'SHIPMENT'])->default('CREATED');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('shopping_cart_id')->nullable();
            $table->unsignedBigInteger('addresses_id')->nullable();
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
