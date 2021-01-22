<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
