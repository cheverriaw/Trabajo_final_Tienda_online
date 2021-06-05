<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detallepedidos extends Migration
{
     
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallepedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_productos')->nullable();
            $table->foreign('id_productos')->references("id")->on("productos")->onDelete('set null');
            $table->unsignedBigInteger('id_ordenes')->nullable();
            $table->foreign('id_ordenes')->references("id")->on("ordenes")->onDelete('set null');
            $table->string('Numero_orden',50);
            $table->decimal('Precio',8,2);
            $table->string('Calidad',50);
            $table->decimal('Descuento',8,2);
            $table->string('Total',50);
            $table->string('Tamano',50);
            $table->string('Color',50);
            $table->date('Fecha_envio');
            $table->string('Order_Detalle_id');
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
        Schema::dropIfExists('detallepedidos');
    }
}
