<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Evaluacion;
use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluacions')->delete();

        // 1
        $tabla = new Evaluacion();
        $tabla->name = '1er Examen Mensual';
        $tabla->save();

        // 2
        $tabla = new Evaluacion();
        $tabla->name = '1er Examen Bimestral';
        $tabla->save();

        // 3
        $tabla = new Evaluacion();
        $tabla->name = '2do Examen Mensual';
        $tabla->save();
    }
}
