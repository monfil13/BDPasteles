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
        Schema::create('pingredients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cake');
            $table->unsignedBigInteger('id_ingredient');

            $table->foreign('id_cake')->references('id')->on('cakes');
            $table->foreign('id_ingredient')->references('id')->on('ingredients');
            $table->integer('cantidad');
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
        Schema::dropIfExists('pingredients');
    }
};
