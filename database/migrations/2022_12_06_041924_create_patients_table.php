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
            $table->string('imagePatient');
            $table->string('genero');
            $table->integer('idade');
            $table->string('email');
            $table->string('dataNascimento');
            $table->string('telefone');
            $table->string('inicioTratamento');
            $table->string('previsãoTratamento');
            $table->integer('anamnese');
            $table->string('imageLaudo');
            $table->string('senha');
            $table->rememberToken();
            $table->unsignedBigInteger('id_doctor');
            $table->foreign('id_doctor')->references('id');
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
        Schema::dropIfExists('patients');
    }
};
