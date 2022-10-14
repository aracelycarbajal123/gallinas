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
        Schema::create('vacuna', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_vacuna');
            $table->date('Fecha_ingresovacuna');
            $table->integer('Stockvacuna');
            $table->string('Lote');
            $table->date('FechaVencimiento');
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
        Schema::dropIfExists('vacuna');
    }
};

