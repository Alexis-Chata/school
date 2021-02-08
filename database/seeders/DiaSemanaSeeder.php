<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Dia_semana;
use Illuminate\Database\Seeder;

class DiaSemanaSeeder extends Seeder
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
        $tabla = new Dia_semana();
        $tabla->name = 'lunes';
        $tabla->save();

        // 2
        $tabla = new Dia_semana();
        $tabla->name = 'martes';
        $tabla->save();

        // 3
        $tabla = new Dia_semana();
        $tabla->name = 'miercoles';
        $tabla->save();

        // 4
        $tabla = new Dia_semana();
        $tabla->name = 'jueves';
        $tabla->save();

        // 5
        $tabla = new Dia_semana();
        $tabla->name = 'viernes';
        $tabla->save();
    }
}
