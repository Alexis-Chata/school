<?php

namespace App\Http\Controllers;

use App\Models\Anio_academico;
use App\Models\Grado;
use App\Models\Grupo_academico;
use App\Models\Seccion;
use Illuminate\Http\Request;

class GrupoAcademicoController extends Controller
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
        $action = route('grupo_academico.store');
        $grupo_academico = new Grupo_academico();
        $grupo_academicos = Grupo_academico::all();
        $anios = Anio_academico::all();
        $grados = Grado::all();
        $seccions = Seccion::all();
        return view('grupo_academico.crear')->with(compact('action', 'grupo_academico', 'grupo_academicos', 'anios', 'grados', 'seccions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        list($rules, $messages) = $this->_rules();
        $this->validate($request, $rules, $messages);

        if ($request->input('name')) {
            $grupo_academico = new Grupo_academico($request->all());
            $grupo_academico->name = strtolower($request->input('name'));
            $grupo_academico->save();
            return redirect()->route('grupo_academico.create')->with('info','El grupo academico se creo con exito');
        }
        return redirect()->route('grupo_academico.create');
    }
    #reglas de validacion
    private function _rules()
    {
        $messages = [
            'name.required' => 'El grupo/aula es requerido',
            'grados_id.required' => 'El grado es requerido',
            'seccions_id.required' => 'El seccion es requerido',
            'anio_academicos_id.required' => 'El año es requerido',
        ];

        $rules = [
            'name' => 'required',
            'grados_id' => 'required',
            'seccions_id' => 'required',
            'anio_academicos_id' => 'required',
        ];

        return array($rules, $messages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo_academico  $grupo_academico
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo_academico $grupo_academico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo_academico  $grupo_academico
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo_academico $grupo_academico)
    {
        $btn_name = 'Actualizar';
        $put = True;
        $anios = Anio_academico::all();
        $grados = Grado::all();
        $seccions = Seccion::all();
        $action = route('grupo_academico.update', $grupo_academico);

        return view('grupo_academico.actualizar')->with(compact('grupo_academico', 'action', 'put', 'btn_name','anios', 'grados', 'seccions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grupo_academico  $grupo_academico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo_academico $grupo_academico)
    {
        $request->validate([
            'name' => "required",
            'grados_id' => "required",
            'seccions_id' => "required",
            'anio_academicos_id' => "required",
        ]);

        if ($request->input('name')) {
            $grupo_academico->name = $request->input('name');
            $grupo_academico->grados_id = $request->get('grados_id');
            $grupo_academico->seccions_id = $request->get('seccions_id');
            $grupo_academico->anio_academicos_id = $request->get('anio_academicos_id');
            $grupo_academico->save();

            return redirect()->route('grupo_academico.create')->with('info','El grupo academico se actualizo con exito');
        }
        return redirect()->route('grupo_academico.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo_academico  $grupo_academico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo_academico $grupo_academico)
    {
        $grupo_academico->delete();
        return redirect()->route('grupo_academico.create')->with('info','El grupo academico se elimino con exito');
    }
}
