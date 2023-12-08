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
        Schema::create('specials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_pasteler');

            $table->string('descripcion');
            $table->string('sabor');
            $table->timestamp('fechayhorapedido');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_pasteler')->references('id')->on('pastelers');
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
        Schema::dropIfExists('specials');
    }
};
