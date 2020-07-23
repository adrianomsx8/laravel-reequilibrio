<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerapeutaFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapeuta_fotos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('terapeuta_id')->unsigned();
            $table->string('foto');
            $table->timestamps();

            $table->foreign('terapeuta_id')->references('id')->on('terapeuta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terapeuta_fotos');
        
    }
}
