<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Ejecuta las semillas de la base de datos.
     */
    public function run(): void
    {
        // Insertar múltiples alumnos
        $alumnos = [
            [
                'nombre'      => 'Alex',
                'apellidos'   => 'Perez',
                'direccion'   => 'Calle Falsa 123',
                'edad'        => 20,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nombre'      => 'Maria',
                'apellidos'   => 'Gomez',
                'direccion'   => 'Avenida Siempre Viva 742',
                'edad'        => 22,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nombre'      => 'Juan',
                'apellidos'   => 'Martinez',
                'direccion'   => 'Calle 3 de Febrero 456',
                'edad'        => 21,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ];

        DB::table('alumnos')->insert($alumnos);

        // Obtener los IDs de los alumnos insertados
        $alumnoAlex  = DB::table('alumnos')->where('nombre', 'Alex')->value('id');
        $alumnoMaria = DB::table('alumnos')->where('nombre', 'Maria')->value('id');
        $alumnoJuan  = DB::table('alumnos')->where('nombre', 'Juan')->value('id');

        // Insertar usuarios asociados a cada alumno
        $usuarios = [
            [
                'correo'     => 'alex@gmail.com',
                'alumno_id'  => $alumnoAlex,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'correo'     => 'maria@gmail.com',
                'alumno_id'  => $alumnoMaria,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'correo'     => 'juan@gmail.com',
                'alumno_id'  => $alumnoJuan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('usuarios')->insert($usuarios);

        // Insertar asignaturas (sin campo alumno_id)
        $asignaturas = [
            [
                'nombre'     => 'DIW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre'     => 'DAW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre'     => 'Diseño Web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('asignaturas')->insert($asignaturas);

        // Obtener los IDs de las asignaturas insertadas
        $asignaturaDIW    = DB::table('asignaturas')->where('nombre', 'DIW')->value('id');
        $asignaturaDAW    = DB::table('asignaturas')->where('nombre', 'DAW')->value('id');
        $asignaturaDiseno = DB::table('asignaturas')->where('nombre', 'Diseño Web')->value('id');

        // Insertar relaciones en la tabla pivote alumno_asignatura
        $alumnoAsignaturas = [
            // Alex cursa DIW y DAW
            [
                'alumno_id'     => $alumnoAlex,
                'asignatura_id' => $asignaturaDIW,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'alumno_id'     => $alumnoAlex,
                'asignatura_id' => $asignaturaDAW,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            // Maria cursa DIW y Diseño Web
            [
                'alumno_id'     => $alumnoMaria,
                'asignatura_id' => $asignaturaDIW,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'alumno_id'     => $alumnoMaria,
                'asignatura_id' => $asignaturaDiseno,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            // Juan cursa DAW y Diseño Web
            [
                'alumno_id'     => $alumnoJuan,
                'asignatura_id' => $asignaturaDAW,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'alumno_id'     => $alumnoJuan,
                'asignatura_id' => $asignaturaDiseno,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        DB::table('alumno_asignatura')->insert($alumnoAsignaturas);

        // Insertar módulos asociados a cada alumno (ejemplo de relación 1:n)
        $modulos = [
            [
                'nombre'     => 'Módulo 1',
                'alumno_id'  => $alumnoAlex,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre'     => 'Módulo 2',
                'alumno_id'  => $alumnoMaria,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre'     => 'Módulo 3',
                'alumno_id'  => $alumnoJuan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('modulo')->insert($modulos);
    }
}
