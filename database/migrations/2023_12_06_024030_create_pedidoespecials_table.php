<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoespecials', function (Blueprint $table) {
            $table->id('PedidoEspecialID');
            $table->string('DescripcionPastel');
            $table->string('SaborPastel');
            $table->datetime('FechaYHoraPedido');

            /* Clave foránea a tabla de clientes
            $table->unsignedBigInteger('Cliente');
            $table->foreign('clientes_ClienteID')->references('ClienteID')->on('clientes');

            // Clave foránea a tabla de pasteleros
            $table->unsignedBigInteger('AliasPastelero');
            $table->foreign('pasteleros_PasteleroID')->references('PasteleroID')->on('pasteleros');*/

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
        Schema::dropIfExists('pedidoespecials');
    }
};
