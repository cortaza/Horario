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
        Schema::create('programas', function (Blueprint $table) {
            $table->id('codigo_prog');
            $table->string('nombre');
            $table->boolean('estado');
            $table->string('nivel_formacion');
            $table->string('duracion');
            $table->integer('version');
            $table->unsignedBigInteger('codigo_cen');
            $table->foreign('codigo_cen')->references('codigo_cen')->on('centro_formacions');
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
        Schema::dropIfExists('programas');
    }
};
