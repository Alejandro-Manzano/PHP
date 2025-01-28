<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos en la tabla categorias
        DB::table('categorias')->insert([
            'nombre' => 'Terror'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Risa'
        ]);
    }
}
