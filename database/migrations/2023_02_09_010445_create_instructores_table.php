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
        Schema::create('instructores', function (Blueprint $table) {
            $table->id('dni');
            $table->string('nombre');
            $table->integer('apellido');
            $table->integer('telefono');
            $table->integer('correo');
            $table->boolean('estado');
            $table->string('tipo_contrato');
            $table->unsignedBigInteger('codigo_area');
            $table->foreign('codigo_area')->references('codigo_area')->on('area_tematicas');
            $table->unsignedBigInteger('codigo_red');
            $table->foreign('codigo_red')->references('codigo_red')->on('red_tematicas');            
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
        Schema::dropIfExists('instructores');
    }
};
