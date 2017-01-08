<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefone', 15);
            $table->string('foto')->nullable();
            $table->string('permissao',2);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
