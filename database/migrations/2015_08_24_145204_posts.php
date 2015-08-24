<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categoria');
            $table->string('foto');
            $table->string('resumo');
            $table->string('descricao');
            $table->string('descricao2');
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
        Schema::drop('posts');
    }
}
