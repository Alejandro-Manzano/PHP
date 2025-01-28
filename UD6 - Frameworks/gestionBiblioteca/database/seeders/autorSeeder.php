<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos en la tabla categorias
        DB::table('autores')->insert([
            'nombre' => 'Jose'
        ]);

        DB::table('autores')->insert([
            'nombre' => 'Pepe'
        ]);
    }
}
