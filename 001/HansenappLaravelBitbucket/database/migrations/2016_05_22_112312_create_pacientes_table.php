<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('numero_sinan');
            $table->string('telefone');
            $table->string('tipo');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('id_ubs')->unsigned()->nullable();
            $table->foreign('id_ubs')->references('id')->on('u_b_s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pacientes');
    }
}
