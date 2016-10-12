<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSallesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Salles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('nom');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('region', 255)->nullable();
            $table->longText('description');
            $table->string('avatar');
            $table->integer('note');
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
        Schema::drop('Salles');
    }
}
