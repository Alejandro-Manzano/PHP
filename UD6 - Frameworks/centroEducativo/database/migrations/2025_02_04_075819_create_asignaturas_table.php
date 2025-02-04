<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            // Aquí ya no incluimos alumno_id
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaturas');
    }
};
