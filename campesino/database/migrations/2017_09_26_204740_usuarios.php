<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario')->unique();
            //$table->primary('usuario');
            //$table->string('email')->unique();
            $table->string('password');
            $table->string('rol')->default('usuario');
            $table->rememberToken();
            $table->timestamps();
            //$table->softDeletes();  //deleted_at

            $table->string('funcionario_Cedula');
            $table->foreign('funcionario_Cedula')->references('cedula')->on('funcionarios');
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
        Schema::dropIfExists('usuarios');
    }
}
