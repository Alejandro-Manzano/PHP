<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos en la tabla libros
        DB::table('libros')->insert([
            'nombre' => 'El Gran Gatsby',
            'fecha_publicacion' => 1925
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Cien años de soledad',
            'fecha_publicacion' => 1967
        ]);

        DB::table('libros')->insert([
            'nombre' => '1984',
            'fecha_publicacion' => 1949
        ]);
    }
}
