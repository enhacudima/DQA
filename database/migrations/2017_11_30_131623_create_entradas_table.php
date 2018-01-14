<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('saldo_inicial');
            $table->double('entradas_bin_card');
            $table->double('entradas_salesforce');
            $table->string('mes',20);
            $table->text('comentario')->nullable(true);
            $table->boolean('status')->default(1);
            $table->integer('franquia_id')->references('id')->on('franquias');
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
        Schema::dropIfExists('entradas');
    }
}
