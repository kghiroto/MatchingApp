<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuggagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luggage', function (Blueprint $table) {
            $table->increments('id'); //id(キー)
            $table->string('username'); //ユーザーネーム
            $table->integer('user_id'); //ユーザーID(usersと紐付け)
            $table->string('delivery_origin'); //お届け元
            $table->string('shipping_adress'); //お届け先
            $table->string('delivery_at'); //お届け希望日
            $table->string('size'); //荷物のサイズ(S,M,L)
            $table->string('remarks'); //備考
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
        Schema::dropIfExists('luggage');
    }
}
