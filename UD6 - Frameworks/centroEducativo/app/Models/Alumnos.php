<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alumnos extends Model
{
    // Si el nombre de la tabla es diferente a 'alumnos', especifícalo:
    protected $table = 'alumnos';

    protected $fillable = ['nombre']; // Agrega otros campos que necesites

    /**
     * Relación muchos a muchos con Asignatura.
     */
    public function asignaturas(): BelongsToMany
    {
        return $this->belongsToMany(Asignatura::class, 'alumno_asignatura', 'alumno_id', 'asignatura_id');
    }

    public function usuarios()
    {
        return $this->hasOne(Usuario::class, 'usuario_id', 'id');
    }

    public function modulos()
    {
        return $this->hasMany(Modulo::class, 'modulo_id');
    }
}
