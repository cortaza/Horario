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
        Schema::create('semaforos', function (Blueprint $table) {
            $table->id('semaforo');
            $table->integer('dia_semana');
            $table->integer('trimestre');
            $table->unsignedBigInteger('codigo_comp');
            $table->foreign('codigo_comp')->references('codigo_comp')->on('competencias');
            $table->unsignedBigInteger('codigo_prog');
            $table->foreign('codigo_prog')->references('codigo_prog')->on('programas');
            $table->unsignedBigInteger('id_resultados');
            $table->foreign('id_resultados')->references('id_resultados')->on('resultados');
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
        Schema::dropIfExists('semaforos');
    }
};
