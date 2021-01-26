<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Grupo_academico;
use Illuminate\Database\Seeder;

class GrupoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupo_academicos')->delete();

        // 1
        $tabla = new Grupo_academico();
        $tabla->anio_academicos_id = 1;
        $tabla->grados_id = 1;
        $tabla->seccions_id = 1;
        $tabla->name = 105;
        $tabla->save();

        // 2
        $tabla = new Grupo_academico();
        $tabla->anio_academicos_id = 1;
        $tabla->grados_id = 1;
        $tabla->seccions_id = 2;
        $tabla->name = 106;
        $tabla->save();

        // 3
        $tabla = new Grupo_academico();
        $tabla->anio_academicos_id = 1;
        $tabla->grados_id = 2;
        $tabla->seccions_id = 1;
        $tabla->name = 107;
        $tabla->save();

        // 4
        $tabla = new Grupo_academico();
        $tabla->anio_academicos_id = 3;
        $tabla->grados_id = 2;
        $tabla->seccions_id = 3;
        $tabla->name = 108;
        $tabla->save();

    }
}
