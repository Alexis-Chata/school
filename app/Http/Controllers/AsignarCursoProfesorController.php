<?php

namespace App\Http\Controllers;

use App\Models\Asignar_curso_profesor;
use App\Models\Curso;
use App\Models\Grupo_academico;
use App\Models\User;
use Illuminate\Http\Request;

class AsignarCursoProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $btn_name = 'Registrar';
        $action = route('asignar_curso_profesor.store');
        $asignar_curso_profesor = new Asignar_curso_profesor();
        $asignar_curso_profesors = Asignar_curso_profesor::all();
        $users = User::all();
        $grupo_academicos = Grupo_academico::all();
        $cursos = Curso::all();

        return view('asignar_curso_profesor.crear')->with(compact('btn_name', 'action', 'asignar_curso_profesor', 'asignar_curso_profesors', 'users', 'grupo_academicos', 'cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'users_id.required' => 'El usuario es requerido',
            'users_id.unique' => 'El Profesor ya tiene una asignacion registrada',
            'cursos_id.required' => 'El Curso es requerido',
            'grupo_academicos_id.required' => 'El grupo academico es requerido',
        ];
        $rules = [
            'users_id' => 'required|unique:asignar_curso_profesors,users_id,null,id,grupo_academicos_id,'.intval($request->get("grupo_academicos_id")).',cursos_id,'.intval($request->get("cursos_id")),
            'cursos_id' => 'required',
            'grupo_academicos_id' => 'required',
        ];

        $this->validate($request, $rules, $messages);

        $asignar_curso_profesor = new Asignar_curso_profesor($request->all());
        $asignar_curso_profesor->save();
        return redirect()->route('asignar_curso_profesor.create')->with('info','La asignacion se realizo con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignar_curso_profesor  $asignar_curso_profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Asignar_curso_profesor $asignar_curso_profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignar_curso_profesor  $asignar_curso_profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignar_curso_profesor $asignar_curso_profesor)
    {
        $btn_name = 'Actualizar';
        $put = True;
        $action = route('asignar_curso_profesor.update', $asignar_curso_profesor);
        $grupo_academicos = Grupo_academico::all();
        $users = User::all();
        $cursos = Curso::all();
        return view('asignar_curso_profesor.actualizar')->with(compact('asignar_curso_profesor', 'action', 'put', 'btn_name' ,'grupo_academicos','users', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignar_curso_profesor  $asignar_curso_profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignar_curso_profesor $asignar_curso_profesor)
    {
        $messages = [
            'users_id.required' => 'El usuario es requerido',
            'users_id.unique' => 'El Profesor ya tiene una asignacion registrada',
            'cursos_id.required' => 'El Curso es requerido',
            'grupo_academicos_id.required' => 'El grupo academico es requerido',
        ];
        $rules = [
            'users_id' => 'required|unique:asignar_curso_profesors,users_id,'.$asignar_curso_profesor->id.',id,grupo_academicos_id,'.intval($request->get("grupo_academicos_id")).',cursos_id,'.intval($request->get("cursos_id")),
            'cursos_id' => 'required',
            'grupo_academicos_id' => 'required',
        ];

        $this->validate($request, $rules, $messages);

        $asignar_curso_profesor->users_id = $request->input('users_id');
        $asignar_curso_profesor->cursos_id = $request->input('cursos_id');
        $asignar_curso_profesor->grupo_academicos_id = $request->input('grupo_academicos_id');
        $asignar_curso_profesor->save();
        return redirect()->route('asignar_curso_profesor.create')->with('info','La asignacion se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignar_curso_profesor  $asignar_curso_profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignar_curso_profesor $asignar_curso_profesor)
    {
        $asignar_curso_profesor->delete();
        return redirect()->route('asignar_curso_profesor.create')->with('info','La asignacion se elimino se elimino con exito');
    }
}
