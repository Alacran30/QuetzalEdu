<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMochilaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla actividades
        Schema::create('mochila', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mochila');
            $table->integer('competencia_id')->unsigned();
            $table->foreign('competencia_id')->references('id')->on('competencia')->onDelete('cascade');
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
        Schema::dropIfExists('mochila');
    }
}
