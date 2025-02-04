<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'alumno_asignatura', 'asignatura_id', 'alumno_id');
    }
}
