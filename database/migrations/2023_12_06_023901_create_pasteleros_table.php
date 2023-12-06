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
        Schema::create('pasteleros', function (Blueprint $table) {
            $table->id('PasteleroID');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Alias');
            $table->string('Telefono');
            $table->integer('AñosTrabajados');
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
        Schema::dropIfExists('pasteleros');
    }
};
