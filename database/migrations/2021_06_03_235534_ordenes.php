<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordenes extends Migration
{
      
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente')->references("id")->on("clientes")->onDelete('set null');
            $table->string('Numero_Orden');
            $table->unsignedBigInteger('id_pagos')->nullable();
            $table->foreign('id_pagos')->references("id")->on('pagos')->onDelete('set null');
            $table->date('Fecha_de_envio');
            $table->string('Estado_transacción');
            $table->string('Pagado');
            $table->date('Fecha_de_pago');
          
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
        Schema::dropIfExists('ordenes');
    }
}
