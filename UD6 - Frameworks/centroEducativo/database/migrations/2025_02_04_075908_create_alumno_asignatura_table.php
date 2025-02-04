<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoAsignaturaTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        Schema::create('alumno_asignatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('asignatura_id');
            $table->timestamps();

            // Definición de las claves foráneas
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');

            // (Opcional) Para evitar registros duplicados:
            $table->unique(['alumno_id', 'asignatura_id']);
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_asignatura');
    }
}
