<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Asignar_curso_profesor;
use Illuminate\Database\Seeder;

class AsignarCursoProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignar_curso_profesors')->delete();

        // 1
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 15;
        $tabla->cursos_id = 8;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 2
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 14;
        $tabla->cursos_id = 7;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 3
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 13;
        $tabla->cursos_id = 6;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 4
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 12;
        $tabla->cursos_id = 5;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 5
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 11;
        $tabla->cursos_id = 4;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 6
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 10;
        $tabla->cursos_id = 3;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 7
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 9;
        $tabla->cursos_id = 2;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 8
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 8;
        $tabla->cursos_id = 1;
        $tabla->grupo_academicos_id = 1;
        $tabla->save();

        // 9
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 7;
        $tabla->cursos_id = 1;
        $tabla->grupo_academicos_id = 2;
        $tabla->save();

        // 10
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 6;
        $tabla->cursos_id = 2;
        $tabla->grupo_academicos_id = 2;
        $tabla->save();

        // 11
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 5;
        $tabla->cursos_id = 3;
        $tabla->grupo_academicos_id = 2;
        $tabla->save();

        // 12
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 4;
        $tabla->cursos_id = 4;
        $tabla->grupo_academicos_id = 2;
        $tabla->save();

        // 13
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 3;
        $tabla->cursos_id = 5;
        $tabla->grupo_academicos_id = 2;
        $tabla->save();

        // 14
        $tabla = new Asignar_curso_profesor();
        $tabla->users_id = 2;
        $tabla->cursos_id = 6;
        $tabla->grupo_academicos_id = 2;
        $tabla->save();
    }
}
