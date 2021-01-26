<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dia_semanas')->delete();

        // 1
        $tabla = new Curso();
        $tabla->name = 'algreba';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 2
        $tabla = new Curso();
        $tabla->name = 'aritmetica';
        $tabla->grados_id = 2;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 3
        $tabla = new Curso();
        $tabla->name = 'geometria';
        $tabla->grados_id = 3;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 3
        $tabla = new Curso();
        $tabla->name = 'Trigonometria';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();
    }
}
