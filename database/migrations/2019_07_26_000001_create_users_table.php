<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 45);
            $table->string('surname', 45);
            $table->string('patronymic', 45);
            $table->date('birthday_date');
            $table->string('email', 100)->unique();
            $table->string('phone_number', 45);
            $table->string('avatar', 255);
            $table->bigInteger('id_role')->unsigned();
            $table->foreign('id_role')->references('id_role')->on('roles');
            $table->string('password', 200);
            $table->text('about_me');
            $table->rememberToken();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}
