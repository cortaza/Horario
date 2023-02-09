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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id('nro_ficha');
            $table->string('jornada');
            $table->string('modalidad');
            $table->integer('nro_aprendices');
            $table->unsignedBigInteger('codigo_prog');
            $table->foreign('codigo_prog')->references('codigo_prog')->on('programas');
            $table->unsignedBigInteger('codigo_formacion');
            $table->foreign('codigo_formacion')->references('codigo_formacion')->on('tipo_formacions');
            $table->unsignedBigInteger('dni');
            $table->foreign('dni')->references('dni')->on('instructores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fichas');
    }
};
