<?php

namespace App\Http\Controllers;

use App\Models\Asignar_curso_profesor;
use App\Models\Dia_semana;
use App\Models\Grupo_academico;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::all();
        $asignar_curso_profesors = Asignar_curso_profesor::all();
        $dia_semanas = Dia_semana::all();
        $grupo_academicos = Grupo_academico::all();

        return view('horario.index')->with(compact('horarios', 'asignar_curso_profesors', 'dia_semanas', 'grupo_academicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $btn_name = 'Registrar';
        $action = route('horario.store');
        $horario = new Horario();
        $horarios = Horario::all();
        $asignar_curso_profesors = Asignar_curso_profesor::where('grupo_academicos_id', $id)->get();
        //dd($asignar_curso_profesors);
        $dia_semanas = Dia_semana::all();
        $grupo_academicos = Grupo_academico::all();

        return view('horario.crear')->with(compact('btn_name', 'action', 'horario', 'horarios', 'asignar_curso_profesors', 'dia_semanas', 'grupo_academicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump($request->get('dia_semanas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
