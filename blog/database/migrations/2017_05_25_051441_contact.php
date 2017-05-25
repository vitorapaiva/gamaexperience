<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('contact', function (Blueprint $table) {
            $table->increments('contact_id')->index();
            $table->string('nome');
            $table->string('email');
            $table->string('ip_usuario');
            $table->string('tipo_usuario');
            $table->mediumText('mensagem');
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
