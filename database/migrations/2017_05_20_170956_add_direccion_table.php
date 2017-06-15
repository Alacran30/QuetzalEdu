<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle');
            $table->string('numeroint');
            $table->string('numeroext');
            $table->string('colonia');
            $table->string('localidad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('cp');
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('persona')->onDelete('cascade');
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
         Schema::drop('direccion');
    }
}
