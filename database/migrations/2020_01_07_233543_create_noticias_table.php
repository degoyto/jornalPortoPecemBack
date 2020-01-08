<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('conteudo');
            $table->string('resumo');
            $table->string('fotoUrl');
            $table->string('legenda');
            $table->string('tipo');
            $table->string('autor');
            $table->boolean('destaque');
            $table->timestamps();
            //teste
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
