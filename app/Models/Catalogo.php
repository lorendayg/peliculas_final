<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = 'catalogo';
//protect $table = "catalogo";
protected $fillable = [
    'titulo',
    'descripcion',
    'genero',
    'director',
    'fecha_estreno'
];

    use HasFactory;
}
