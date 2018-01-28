<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecontagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recontagems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('franquia_id');
            $table->date('data_dqa');
            $table->date('data_inicio');
            $table->date('data_fim');

            $table->integer('nr_pagina');
            $table->integer('total');
            $table->string('codigo',20)->references('codigo')->on('atividades');

            $table->integer('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('recontagems');
    }
}
