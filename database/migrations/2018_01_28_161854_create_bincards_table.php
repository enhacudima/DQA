<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bincards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cabecalhos_id',20)->references('id')->on('cabecalhos');
            $table->string('produtos_id',20)->references('id')->on('produtos');
            $table->double('saldo_inicial');
            $table->double('entradas');
            $table->double('saidas');
            $table->double('stock_balance');
            $table->string('comentario',255)->nullable(true);
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
        Schema::dropIfExists('bincards');
    }
}
