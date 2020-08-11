<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**
      * A (Administrador)
      * P (Paciente)
      * T (Terapeuta)
      * C (Usuario Comum)
      */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('profile', ['A', 'P', 'T', 'C'])->default('C');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile');
        });
    }
}
