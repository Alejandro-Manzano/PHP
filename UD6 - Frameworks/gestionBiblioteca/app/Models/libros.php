<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo(autores::class, 'id_autor');
    }
    public function categoria()
    {
        return $this->belongsToMany(categorias::class, 'id_categoria');
    }
}
