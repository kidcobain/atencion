<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Solicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lugar');
            $table->string('tipo');
            $table->string('solicitud');
            $table->string('observaciones');
            $table->string('fundo');
            $table->date('fecha');
            $table->timestamps();
            $table->softDeletes();  //deleted_at

            $table->string('persona_Cedula');
            $table->string('funcionario_Cedula');
            $table->foreign('persona_Cedula')->references('cedula')->on('personas')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('funcionario_Cedula')->references('cedula')->on('funcionarios')->onDelete('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('solicitudes');
    }
}
