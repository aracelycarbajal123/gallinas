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
        Schema::create('control', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idperson')->constrained('person');
            $table->foreignId('idComunidad')->constrained('comunidad');
            $table->foreignId('idvacuna')->constrained('vacuna');
            $table->foreignId('idaves')->constrained('aves');
            $table->integer('cantidad');
            $table->string('activo');

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
        Schema::dropIfExists('control');
    }
};
