<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franquias', function (Blueprint $table) {
            $table->string('franquia_id',225);
            $table->string('provincia_id',225);
            $table->string('distrito_id',225);
            $table->string('bairro',225);
            $table->string('tipo',225);
            $table->string('modelo',225);
            $table->string('nome',225);
            $table->double('telefone');
            $table->string('observacoes',225);
            $table->double('lat');
            $table->double('log');
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franquias');
    }
}
