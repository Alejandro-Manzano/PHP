<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar alumnos
        DB::table('alumnos')->insert([
            [
                'nombre' => 'Alex',
                'apellidos' => 'Perez',
                'direccion' => 'Calle Falsa 123',
                'edad' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Obtener el ID del alumno insertado
        $alumnoId = DB::table('alumnos')->where('nombre', 'Alex')->value('id');

        // Insertar usuarios con el alumno_id correspondiente
        DB::table('usuarios')->insert([
            [
                'correo' => 'alex@gmail.com',
                'alumno_id' => $alumnoId,  // Asociar el alumno_id
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Insertar asignaturas con el alumno_id correspondiente (si es necesario)
        DB::table('asignaturas')->insert([
            [
                'nombre' => 'DIW',
                'alumno_id' => $alumnoId,  // Asociar el alumno_id si es necesario
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Insertar módulos con el alumno_id correspondiente (si es necesario)
        DB::table('modulo')->insert([
            [
                'nombre' => 'DAW',
                'alumno_id' => $alumnoId,  // Asociar el alumno_id si es necesario
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
