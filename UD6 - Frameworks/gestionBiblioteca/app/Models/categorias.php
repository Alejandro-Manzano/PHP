<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Relación con libros: una categoría puede tener muchos libros
    public function libros()
    {
        return $this->hasMany(Libro::class, 'id_categoria');
    }
}
