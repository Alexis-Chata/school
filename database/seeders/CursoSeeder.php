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
        DB::table('cursos')->delete();

        // 1
        $tabla = new Curso();
        $tabla->name = 'algreba';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 2
        $tabla = new Curso();
        $tabla->name = 'aritmetica';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 3
        $tabla = new Curso();
        $tabla->name = 'geometria';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 4
        $tabla = new Curso();
        $tabla->name = 'Trigonometria';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 5
        $tabla = new Curso();
        $tabla->name = 'Fisica';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 6
        $tabla = new Curso();
        $tabla->name = 'Quimica';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 7
        $tabla = new Curso();
        $tabla->name = 'RM';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 8
        $tabla = new Curso();
        $tabla->name = 'RV';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 9
        $tabla = new Curso();
        $tabla->name = 'Economia';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 10
        $tabla = new Curso();
        $tabla->name = 'Biologia';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 11
        $tabla = new Curso();
        $tabla->name = 'Geografia';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 12
        $tabla = new Curso();
        $tabla->name = 'Psicologia';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 13
        $tabla = new Curso();
        $tabla->name = 'Filosofia';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 14
        $tabla = new Curso();
        $tabla->name = 'Literatura';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 15
        $tabla = new Curso();
        $tabla->name = 'Historia';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 16
        $tabla = new Curso();
        $tabla->name = 'Lenguaje';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 17
        $tabla = new Curso();
        $tabla->name = 'Civica';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();

        // 18
        $tabla = new Curso();
        $tabla->name = 'Ingles';
        $tabla->grados_id = 1;
        $tabla->anio_academicos_id = 1;
        $tabla->save();
    }
}
