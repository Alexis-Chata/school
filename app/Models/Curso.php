<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['anio_academicos_id', 'grados_id', 'name'];

    public function grados()
    {
        return $this->belongsTo(Grado::class);
    }
    public function anio_academicos()
    {
        return $this->belongsTo(Anio_academico::class);
    }
}
