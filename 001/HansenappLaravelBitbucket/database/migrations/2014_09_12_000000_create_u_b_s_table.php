<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_b_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',60);
            $table->string('bairro',100);
            $table->string('rua',150);
            $table->string('numero',10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('u_b_s');
    }
}
