<?php

namespace App\Http\Controllers;

use App\Models\Grupo_academico;
use App\Models\Matricula;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
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
        $action = route('matricula.store');
        $matricula = new Matricula();
        $matriculas = Matricula::all();
        //$user = new User;
        $users = User::all();
        $grupo_academicos = Grupo_academico::all();
        return view('matricula.crear')->with(compact('action', 'matricula', 'matriculas', 'grupo_academicos', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existe_matricula=Matricula::all()
                ->where('users_id', $request->get('users_id'));
        $año_id=Grupo_academico::find($request->get('grupo_academicos_id',['id']));
        $años_matriculados=[];
        foreach ($existe_matricula as $value) {
            $años_matriculados[]=$value->grupo_academicos->anio_academicos_id;
        }
        if(!in_array($año_id->anio_academicos_id, $años_matriculados)){
            list($rules, $messages) = $this->_rules();
            $this->validate($request, $rules, $messages);

            $matricula = new Matricula($request->all());
            $matricula->save();
            return redirect()->route('matricula.create')->with('info','La matricula se creo con exito');
        }else{
            return redirect()->route('matricula.create')->with('info','El usuario ya cuenta con una matricula en este año');
        }

    }
    #reglas de validacion
    private function _rules()
    {
        $messages = [
            'users_id.required' => 'El usuario es requerido',
            //'seccions_id.required' => 'El seccion es requerido',
            'grupo_academicos_id.required' => 'El grupo academico es requerido',
        ];

        $rules = [
            'users_id' => 'required',
            //'seccions_id' => 'required',
            'grupo_academicos_id' => 'required',
        ];

        return array($rules, $messages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula $matricula)
    {
        $btn_name = 'Actualizar';
        $put = True;
        $action = route('matricula.update', $matricula);
        $grupo_academicos = Grupo_academico::all();
        $users = User::all();
        return view('matricula.actualizar')->with(compact('matricula', 'action', 'put', 'btn_name' ,'grupo_academicos','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        $existe_matricula=Matricula::all()
                ->where('users_id', $request->get('users_id'))->whereNotIn('id',[$matricula->id]);
        $año_id=Grupo_academico::find($request->get('grupo_academicos_id',['id']));
        $años_matriculados=[];
        foreach ($existe_matricula as $value) {
            $años_matriculados[]=$value->grupo_academicos->anio_academicos_id;
        }//dd($existe_matricula);
        if(!in_array($año_id->anio_academicos_id, $años_matriculados)){
            list($rules, $messages) = $this->_rules();
            $this->validate($request, $rules, $messages);

            $matricula->users_id = $request->input('users_id');
            $matricula->grupo_academicos_id = $request->input('grupo_academicos_id');
            $matricula->save();
            return redirect()->route('matricula.create')->with('info','La matricula se actualizo con exito');
        }else{
            return redirect()->route('matricula.create')->with('info','El usuario ya cuenta con una matricula en este año');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula $matricula)
    {
        $matricula->delete();
        return redirect()->route('matricula.create')->with('info','El grupo academico se elimino con exito');
    }
}
