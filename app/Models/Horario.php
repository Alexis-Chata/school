<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable = ['dia_semanas_id', 'asignar_curso_profesors_id', 'hora_inicio', 'hora_fin'];

    public function dia_semanas()
    {
        return $this->belongsTo(Dia_semana::class);
    }
    public function asignar_curso_profesors()
    {
        return $this->belongsTo(Asignar_curso_profesor::class);
    }
}
