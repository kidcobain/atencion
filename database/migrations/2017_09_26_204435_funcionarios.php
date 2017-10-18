<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funcionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula')->unique();
            //$table->primary('cedula');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->enum('sexo', ['f', 'm']);
            $table->string('telefono');
            $table->string('direccion');
            $table->string('cargo');
            $table->string('departamento');
            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('funcionarios');
    }
}
