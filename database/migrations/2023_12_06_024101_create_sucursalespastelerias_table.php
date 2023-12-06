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
        Schema::create('sucursalespastelerias', function (Blueprint $table) {
            $table->id('SucursalID');
            /* Clave foránea a tabla de pasteleros
            $table->unsignedBigInteger('NombrePastelero');
            $table->foreign('pasteleros_PasteleroID')->references('PasteleroID')->on('pasteleros');*/
            $table->string('Nombre');
            $table->string('Direccion');
            $table->string('NombreRecepcionista');
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
        Schema::dropIfExists('sucursalespastelerias');
    }
};
