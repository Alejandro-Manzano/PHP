<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno; // Importa el modelo Alumno

class Modulo extends Model
{
    
    public function alumno()
    {
        return $this->hasMany(Alumno::class, 'alumno_id', 'id');
    }
}
