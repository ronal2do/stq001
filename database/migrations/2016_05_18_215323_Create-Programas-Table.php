<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('slug');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')
                                    ->on('categoria')
                                    ->onDelete('restrict');
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')
                                    ->on('catprograma')
                                    ->onDelete('restrict');
            $table->string('foto');
            $table->string('resumo');
            $table->string('classe')->default(3);;
            $table->string('descricao');
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
        Schema::drop('programas');
    }
}
