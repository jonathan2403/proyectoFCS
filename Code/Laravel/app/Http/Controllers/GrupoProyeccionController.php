<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests\CreateGrupoRequest;
use FCS\Http\Requests\EditGrupoRequest;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Grupo;
use FCS\Profesor;
use FCS\Estudiante;
use DB, View, Session, Redirect;

class GrupoProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $indicador_modulo = 20;
       $grupos = Grupo::join('profesores', 'grupo.id_profesor', '=', 'profesores.id')
        ->select('grupo.id' ,'grupo.sigla', 'grupo.descripcion', 'grupo.tipo',
         DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->where('tipo', 'ps')
        ->get();
         $integrantes = \DB::table('grupo')
        ->join('adscripcion', 'adscripcion.id_grupo', '=', 'grupo.id')
        ->count();
        return view('componentes.grupo_proyeccion.index', compact('grupos', 'integrantes', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 20;
        $route = [ 'route' => 'grupo-proyeccion.store','method'=>'POST' ];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        return view('componentes.grupo_proyeccion.addgrupo_proyeccion', compact('route', 'nombre_profesor', 'indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $valida = \Validator::make($datos, Grupo::$reglas_crear, Grupo::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }else{
            Grupo::create($datos);
        }
        return redirect('grupo-proyeccion')->with('message','Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador_modulo = 20;
        $grupos = \DB::table('grupo')
        ->select('id', 'sigla', 'descripcion')
        ->where('id', $id)
        ->get();
        $estudiantes = \DB::table('adscripcion')
        ->join('estudiantes', 'adscripcion.id_estudiante', '=', 'estudiantes.id')
        ->join('grupo', 'adscripcion.id_grupo', '=', 'grupo.id')
        ->select('adscripcion.id', 'estudiantes.codigo_estudiante', 'estudiantes.email', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS full_name"))
        ->where('grupo.id', $id)
        ->get();
        $nombre_estudiante = Estudiante::all()->lists('full_name', 'id');
        return view('componentes.grupo.showgrupo', compact('grupos', 'estudiantes', 'nombre_estudiante', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 20;
        $grupo=Grupo::find($id);
        $route = [ 'route'=>['grupo-proyeccion.update',$grupo->id],'method'=>'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        return view('componentes.grupo_proyeccion.editgrupo_proyeccion', compact('route','grupo', 'nombre_profesor', 'indicador_modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grupo=Grupo::find($id);
        $grupo->fill($request->all());
        $grupo->save();
        Session::flash('message','Grupo Editado Correctamente');
        return redirect::to('grupo-proyeccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}