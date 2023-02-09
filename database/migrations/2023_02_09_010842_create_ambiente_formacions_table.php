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
        Schema::create('ambiente_formacions', function (Blueprint $table) {
            $table->id('codigo_amb');
            $table->string('nombre');
            $table->string('recursos');
            $table->string('especialidad');
            $table->unsignedBigInteger('codigo_cen');
            $table->foreign('codigo_cen')->references('codigo_cen')->on('centro_formacions');
            $table->unsignedBigInteger('nro_ficha');
            $table->foreign('nro_ficha')->references('nro_ficha')->on('fichas');
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
        Schema::dropIfExists('ambiente_formacions');
    }
};
