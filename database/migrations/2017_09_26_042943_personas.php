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
            $table->increments('id');
            $table->string('cedula')->unique();
            //$table->primary('cedula')->index();;
            $table->string('nombre');
            $table->string('apellido');
            $table->enum('sexo', ['f', 'm']);
            $table->string('tipo');
            $table->string('rif');
            $table->string('representante')->nullable();
            $table->string('nivel_educativo');
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('sector');
            $table->string('direccion');
            $table->string('unidad_produccion');
            $table->string('organizacion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->timestamps();
            $table->softDeletes();  //deleted_at
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
