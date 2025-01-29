<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('fecha_publicacion');
            $table->unsignedBigInteger('id_autor'); // Clave foránea correcta
            $table->unsignedBigInteger('id_categoria'); // Nueva clave foránea
            $table->timestamps();

            // Definir claves foráneas correctamente
            $table->foreign('id_autor')->references('id')->on('autores')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
