<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla competencias
        Schema::create('competencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('area_conocimiento')->onDelete('cascade');
            $table->string('descripcion');
            $table->string('informacion');
            $table->string('video');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('competencia');

    }
}
