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
            $table->string('province',225);
            $table->string('districts',225);
            $table->string('bairro',225)->nullable(true);
            $table->string('tipo',225);
            $table->string('modelo',225);
            $table->string('nome',225);
            $table->string('enfermeira',225)->nullable(true);
            $table->string('telefone',30)->nullable(true);
            $table->string('observacoes',225)->nullable(true);
            $table->double('lat')->nullable(true);
            $table->double('log')->nullable(true);
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
