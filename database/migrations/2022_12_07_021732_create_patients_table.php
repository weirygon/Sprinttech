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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('genero');
            $table->string('email');
            $table->string('dataNascimento');
            $table->string('telefone');
            $table->timestamps();   //Data de inicio do tratamento
            $table->date('previsao');
            $table->text('tratamento');
            $table->text('laudo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
