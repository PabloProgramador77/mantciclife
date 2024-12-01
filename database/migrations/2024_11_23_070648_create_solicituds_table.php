<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('derivacion');
            $table->string('falla');
            $table->string('prioridad');
            $table->string('intervencion');
            $table->string('necesidad');
            $table->string('cliente');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('ciudad');
            $table->string('plan')->nullable();
            $table->string('rut')->nullable();
            $table->string('relato');
            $table->string('analisis');
            $table->bigInteger('idUser')->unsigned();
            $table->timestamps();

            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
