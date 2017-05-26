<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Survey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('survey', function (Blueprint $table) {
            $table->increments('survey_id')->index();
            $table->string('nome');
            $table->string('email');
            $table->string('data_nascimento')->nullable();
            $table->string('cep')->nullable();
            $table->string('situacao_profissional');
            $table->string('telefone')->nullable();
            $table->string('como_ajudaria');
            $table->string('utiliza_credito');
            $table->string('sonho_proprio');
            $table->string('bem_proprio');
            $table->string('ip_usuario');
            $table->string('tipo_usuario');
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
        //
    }
}
