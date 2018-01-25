<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabecalhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabecalhos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transacao', 15)->unique();
            $table->integer('franquia_id');
            $table->date('data_dqa');
            $table->date('data_inicio');
            $table->date('data_fim');
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
        Schema::dropIfExists('cabecalhos');
    }
}
