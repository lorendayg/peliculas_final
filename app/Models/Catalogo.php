<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;

    protected $table = 'catalogo';  // Asegúrate que coincida con tu tabla en BD

    protected $fillable = [
        'titulo',
        'descripcion',
        'genero',
        'director',
        'fecha_estreno',
    ];
}

