<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarCursoProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_curso_profesors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('cursos_id');
            $table->unsignedBigInteger('grupo_academicos_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();

            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cursos_id')
            ->references('id')
            ->on('cursos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('grupo_academicos_id')
                ->references('id')
                ->on('grupo_academicos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unique(['users_id', 'cursos_id', 'grupo_academicos_id'], 'asignar_curso_profesors_unicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignar_curso_profesors');
    }
}
