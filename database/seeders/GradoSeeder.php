<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Grado;
use Illuminate\Database\Seeder;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grados')->delete();

        // 1
        $tabla = new Grado();
        $tabla->name = '1ro primaria';
        $tabla->save();

        // 2
        $tabla = new Grado();
        $tabla->name = '2do primaria';
        $tabla->save();

        // 3
        $tabla = new Grado();
        $tabla->name = '3ro primaria';
        $tabla->save();
    }
}
