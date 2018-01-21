<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatecontagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contagem', function (Blueprint $table) {
            $table->double('ntrasacao');
            $table->integer('franquia_id')->references('id')->on('franquias');
            $table->dateTime('datadqa');
            $table->dateTime('datainicio');
            $table->dateTime('datafim');


            $table->increments('id');
            $table->double('contagem_fisica');
            $table->string('mes',20);
            $table->text('comentario')->nullable(true);
            $table->boolean('status')->default(1);
            $table->integer('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('contagem');
    }
}
