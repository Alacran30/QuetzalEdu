<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla persona
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->date('nacimiento')->nullable();
            $table->string('genero')->nullable();
            $table->string('rfc')->nullable();
            $table->string('curp')->nullable();
            $table->string('telcasa')->nullable();
            $table->string('telmovil')->nullable();
            $table->string('image')->default('avatar.png');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        //
         Schema::drop('persona');
    }
}
