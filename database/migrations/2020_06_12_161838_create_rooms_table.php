<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('luggage_id');
            $table->string('customer_name');
            $table->string('customer_id');
            $table->string('size');
            $table->string('delivery_origin');
            $table->string('shipping_adress');
            $table->string('delivery_at');
            $table->string('remarks');
            $table->string('deliver_name');
            $table->string('deliver_id');
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
        Schema::dropIfExists('rooms');
    }
}
