<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDPresenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_presencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('denuciado');
            $table->string('telefone');
            $table->string('local');
            $table->string('email');
            $table->string('nome');
            $table->string('tipodeassedio');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('d_presencias');
    }
}
