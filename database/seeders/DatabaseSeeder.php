<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        \App\Models\User::factory(24)->create();
        $this->call(AnioAcademicoSeeder::class);
        $this->call(DiaSemanaSeeder::class);
        $this->call(GradoSeeder::class);
        $this->call(SeccionSeeder::class);
        $this->call(EvaluacionSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(GrupoAcademicoSeeder::class);
        $this->call(MatriculaSeeder::class);
        $this->call(AsignarCursoProfesorSeeder::class);
    }
}
