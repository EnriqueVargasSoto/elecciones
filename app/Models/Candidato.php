<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidato extends Model
{
    use HasFactory;
    protected $table = 'candidatos';
    protected $fillable = [
        'id',
        'nombre_corto',
        'tipo',
        'departamento_id',
        'provincia_id',
        'distrito_id',
        'partido',
        'nombre_apellido',
        'foto',
        'observador',
        'estado'
    ];
}
