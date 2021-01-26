<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Anio_academico;
use Illuminate\Database\Seeder;

class AnioAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anio_academicos')->delete();

        // 1
        $tabla = new Anio_academico();
        $tabla->name = 2021;
        $tabla->save();

        // 2
        $tabla = new Anio_academico();
        $tabla->name = 2022;
        $tabla->save();

        // 3
        $tabla = new Anio_academico();
        $tabla->name = 2023;
        $tabla->save();
    }
}
