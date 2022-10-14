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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Dpi');
            $table->string('Telefono');
            $table->string('Email');
            $table->date('FechaNacimiento');
            $table->string('Activo');
            $table->foreignId('idComunidad')->constrained('comunidad');
            $table->string('Tipopersona');
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
        Schema::dropIfExists('person');
    }
};
