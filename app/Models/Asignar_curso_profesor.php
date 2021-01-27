<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignar_curso_profesor extends Model
{
    use HasFactory;
    protected $fillable = ['users_id', 'grupo_academicos_id', 'cursos_id'];

    public function grupo_academicos()
    {
        return $this->belongsTo(Grupo_academico::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function cursos()
    {
        return $this->belongsTo(Curso::class);
    }
}
