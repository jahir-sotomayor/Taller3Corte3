<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputadorsTable extends Migration
{
    public function up()
    {
        Schema::create('computadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('color');

            $table->integer('formulario_id')->unsigned();
            $table->foreign('formulario_id')->references('id')->on('formularios');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('computadors');
    }
}
