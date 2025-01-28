<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser llenados masivamente
    protected $fillable = [
        'nombre', 'fecha_publicacion',
    ];
}
