<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerapeutaEspecialidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapeuta_especialidades', function (Blueprint $table) {
            $table->bigInteger('terapeuta_id');
            $table->bigInteger('terapia_id');
            $table->foreign('terapeuta_id')->references('id')->on('terapeuta');
            $table->foreign('terapia_id')->references('id')->on('terapias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terapeuta_especialidades');
    }
}
