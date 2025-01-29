<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar autores
        DB::table('autores')->insert([
            [
                'nombre' => 'J.K. Rowling',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'George R.R. Martin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'J.R.R. Tolkien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insertar categorías
        DB::table('categorias')->insert([
            [
                'nombre' => 'Fantasía',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ciencia Ficción',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Aventura',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insertar libros con claves foráneas de autores y categorías
        DB::table('libros')->insert([
            [
                'nombre' => 'Harry Potter y la piedra filosofal',
                'fecha_publicacion' => 1997,
                'id_autor' => 1, // J.K. Rowling
                'id_categoria' => 1, // Fantasía
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Juego de tronos',
                'fecha_publicacion' => 1996,
                'id_autor' => 2, // George R.R. Martin
                'id_categoria' => 1, // Fantasía
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'El Hobbit',
                'fecha_publicacion' => 1937,
                'id_autor' => 3, // J.R.R. Tolkien
                'id_categoria' => 1, // Fantasía
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Dune',
                'fecha_publicacion' => 1965,
                'id_autor' => 2, // George R.R. Martin (esto puede cambiar a un autor de ciencia ficción si prefieres)
                'id_categoria' => 2, // Ciencia Ficción
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
