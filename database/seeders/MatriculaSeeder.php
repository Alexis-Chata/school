<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Matricula;
use Illuminate\Database\Seeder;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matriculas')->delete();

        // 1
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 1;
        $tabla->users_id = 1;
        $tabla->save();

        // 2
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 1;
        $tabla->users_id = 2;
        $tabla->save();

        // 3
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 1;
        $tabla->users_id = 3;
        $tabla->save();

        // 4
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 1;
        $tabla->users_id = 4;
        $tabla->save();

        // 5
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 2;
        $tabla->users_id = 5;
        $tabla->save();

        // 6
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 2;
        $tabla->users_id = 6;
        $tabla->save();

        // 7
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 2;
        $tabla->users_id = 7;
        $tabla->save();

        // 8
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 2;
        $tabla->users_id = 8;
        $tabla->save();

        // 9
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 3;
        $tabla->users_id = 9;
        $tabla->save();

        // 10
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 3;
        $tabla->users_id = 10;
        $tabla->save();

        // 11
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 3;
        $tabla->users_id = 11;
        $tabla->save();

        // 12
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 3;
        $tabla->users_id = 12;
        $tabla->save();

        // 13
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 3;
        $tabla->users_id = 13;
        $tabla->save();

        // 14
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 3;
        $tabla->users_id = 14;
        $tabla->save();

        // 15
        $tabla = new Matricula();
        $tabla->grupo_academicos_id = 3;
        $tabla->users_id = 15;
        $tabla->save();

    }
}
