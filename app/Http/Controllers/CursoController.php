<?php

namespace App\Http\Controllers;

use App\Models\Anio_academico;
use App\Models\Curso;
use App\Models\Grado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CursoController extends Controller
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
        $action = route('curso.store');
        $curso = new Curso();
        $cursos = Curso::all();
        $anios = Anio_academico::all();
        $grados = Grado::all();
        return view('curso.crear')->with(compact('action', 'curso','btn_name', 'cursos', 'anios', 'grados'));
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
            $curso = new Curso($request->all());
            $curso->name = strtolower($request->input('name'));
            $curso->save();
            return redirect()->route('curso.create')->with('info','El curso se creo con exito');
        }
        return redirect()->route('curso.create');
    }
    #reglas de validacion
    private function _rules()
    {
        $messages = [
            'name.required' => 'El curso es requerido',
            'grados_id.required' => 'El grado es requerido',
            'anio_academicos_id.required' => 'El año es requerido',
        ];

        $rules = [
            'name' => 'required',
            'grados_id' => 'required',
            'anio_academicos_id' => 'required',
        ];

        return array($rules, $messages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        $btn_name = 'Actualizar';
        $put = True;
        $anios = Anio_academico::all();
        $grados = Grado::all();
        $action = route('curso.update', $curso);

        return view('curso.actualizar')->with(compact('curso', 'action', 'put', 'btn_name','anios', 'grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'name' => "required",
            'grados_id' => "required",
            'anio_academicos_id' => "required",
        ]);

        if ($request->input('name')) {
            $curso->name = $request->input('name');
            $curso->grados_id = $request->get('grados_id');
            $curso->anio_academicos_id = $request->get('anio_academicos_id');
            $curso->save();

            return redirect()->route('curso.create')->with('info','El curso se actualizo con exito');
        }
        return redirect()->route('curso.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('curso.create')->with('info','El curso se elimino con exito');
    }
}
