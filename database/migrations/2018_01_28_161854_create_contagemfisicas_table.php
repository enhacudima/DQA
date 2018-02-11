<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContagemfisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contagemfisicas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('franquia_id');
            $table->date('data_dqa');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->string('bincards_id',20)->references('id')->on('bincards')->nullable(true);
            $table->string('produtos_id',20)->references('id')->on('produtos');
            $table->double('saldo')->nullable(true);
            $table->double('contagem_fisica');
            $table->double('variance')->nullable(true);
            $table->string('comentario',225)->nullable(true);
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
        Schema::dropIfExists('contagemfisicas');
    }
}
