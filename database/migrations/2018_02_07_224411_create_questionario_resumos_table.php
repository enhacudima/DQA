<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionarioResumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario_resumos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('franquia_id');
            $table->date('data_dqa');
            $table->date('data_inicio');
            $table->date('data_fim');

            $table->string('questao',30);
            $table->string('resposta');
            $table->integer('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('questionario_resumos');
    }
}
