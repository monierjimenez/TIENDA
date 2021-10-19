<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('second_name')->nullable();
            $table->string('last_name');
            $table->bigInteger('identity_card');
            $table->string('phone_number');
            $table->string('address');
            $table->string('numero');
            $table->string('apto')->nullable();
            $table->string('entre_calle')->nullable();
            $table->string('reparto')->nullable();
            $table->string('selectedEstado');
            $table->string('selectedMunicipio');
            $table->unsignedInteger('status')->default('1');
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
        Schema::dropIfExists('addresses');
    }
}
