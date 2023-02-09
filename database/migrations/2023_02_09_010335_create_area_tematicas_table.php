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
        Schema::create('area_tematicas', function (Blueprint $table) {
            $table->id('codigo_area');
            $table->string('Nombre');
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
        Schema::dropIfExists('area_tematicas');
    }
};
