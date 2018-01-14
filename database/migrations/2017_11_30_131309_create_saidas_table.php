<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesaidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saidas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('Saidas_resumo_semanal');
            $table->double('saida_salesforce');
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
        Schema::dropIfExists('saidas');
    }
}
