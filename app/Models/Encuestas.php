<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model
{
    use HasFactory;

    protected $table = "encuestas";
    protected $primaryKey = 'idEncuesta';
    public $timestamps = false;

    protected $fillable = [
        'nombreEncuesta',
        'fechaInicio',
        'fechaTermino',
        'observaciones',
        'encuestaManual',
        'estado',
    ];

}
