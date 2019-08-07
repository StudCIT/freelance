<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id_order');
            $table->string('title', 200);
            $table->longText('description');
            $table->integer('price');
            $table->string('time', 20);
            $table->string('status', 45);
            $table->bigInteger('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('users');
            $table->bigInteger('id_worker')->unsigned();
            $table->foreign('id_worker')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('orders');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}
