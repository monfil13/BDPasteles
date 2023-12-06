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
        Schema::create('pastelingredientes', function (Blueprint $table) {
            $table->id();
            /* Clave foránea a tabla de pasteleros
            $table->unsignedBigInteger('PasteleroID');
            $table->foreign('pasteleros_PasteleroID')->references('PasteleroID')->on('pasteleros');
            // Clave foránea a tabla de ingredientes
            $table->unsignedBigInteger('IngredienteID');
            $table->foreign('ingredientes_IngredienteID')->references('IngredienteID')->on('ingredientes');
*/
            $table->integer('Cantidad');
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
        Schema::dropIfExists('pastelingredientes');
    }
};
