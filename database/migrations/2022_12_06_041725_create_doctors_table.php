<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('imageDoctor');
            $table->string('genero');
            $table->integer('cro');
            $table->string('email');
            $table->string('dataNascimento');
            $table->string('telefone');
            $table->string('enderecoConsultorio');
            $table->string('bairro');
            $table->integer('cep');
            $table->string('cidade');
            $table->string('uf');
            $table->string('senha');
            $table->rememberToken();
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
        Schema::dropIfExists('doctors');
    }
};
