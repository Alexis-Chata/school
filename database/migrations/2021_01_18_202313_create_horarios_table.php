<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dia_semanas_id');
            $table->unsignedBigInteger('asignar_curso_profesors_id');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();

            $table->foreign('dia_semanas_id')
                ->references('id')
                ->on('dia_semanas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('asignar_curso_profesors_id')
                ->references('id')
                ->on('asignar_curso_profesors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
