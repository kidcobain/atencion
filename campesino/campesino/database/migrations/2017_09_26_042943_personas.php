<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personas', function (Blueprint $table) {
            $table->string('cedula');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('tipo');
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('sector');
            $table->string('direccion');
            $table->string('rif');
            $table->string('telefono');
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
        Schema::dropIfExists('personas');
    }
}
