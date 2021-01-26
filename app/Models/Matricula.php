<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $fillable = ['grupo_academicos_id', 'users_id'];

    public function grupo_academicos()
    {
        return $this->belongsTo(Grupo_academico::class);
    }
    public function users()
    {
        return $this->belongsTo(user::class);
    }
}
