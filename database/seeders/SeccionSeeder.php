<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Seccion;
use Illuminate\Database\Seeder;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccions')->delete();

        // 1
        $tabla = new Seccion();
        $tabla->name = 'A';
        $tabla->save();

        // 2
        $tabla = new Seccion();
        $tabla->name = 'B';
        $tabla->save();

        // 3
        $tabla = new Seccion();
        $tabla->name = 'C';
        $tabla->save();
    }
}
