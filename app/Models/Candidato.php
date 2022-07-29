<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    protected $table = 'candidatos';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'tipo',
        'idDepartamento',
        'idProvincia',
        'idDistrito',
        'nombreCorto',
        'idPartido',
        'nombresApellidos',
        'foto',
        'estado',
        'visualiza',
        'observaciones',
        'created_at',
        'updated_at',
    ];

    public function departamento() {
        return $this->belongsTo(Departamento::class,'idDepartamento');
    }
    public function provincia() {
        return $this->belongsTo(Provincia::class, 'idProvincia');
    }
    public function distrito() {
        return $this->belongsTo(Distrito::class,'idDistrito');
    }
}
