<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMunicipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->bigInteger('codigo_ibge');
            $table->string('nome');
            $table->string('latitude', 9)->nullable();
            $table->string('longitude', 9)->nullable();
            $table->boolean('capital');
            $table->integer('estado_id');

            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
