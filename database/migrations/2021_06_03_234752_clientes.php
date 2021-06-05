<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',50);
            $table->string('Apellido',50);
            $table->string('Clase',50);
            $table->string('Direccion',50);
            $table->string('Estado',50);
            $table->string('Pais',50);
            $table->string('Telefono',50);
            $table->string('Email')->unique();
            $table->string('Password',50);
            $table->string('Targeta_Credito',50);
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
        Schema::dropIfExists('clientes');
    }
}
