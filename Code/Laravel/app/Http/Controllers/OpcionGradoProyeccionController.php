<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateOpcionGradoRequest;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Estudiante;
use FCS\OpcionGrado;
use FCS\Entidad;
use DB, View, Session, Redirect;

class OpcionGradoProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 14;
       $opciongrados=OpcionGrado::whereIn('tipo_opcion_grado', ['epps', 'pas', 'pos'])
        ->get();
        return view('componentes.opcion_grado_proyeccion.index', compact('opciongrados', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $indicador_modulo = 14;
        $route = [ 'route' => 'opcion-grado-proyeccion.store','method'=>'POST' ];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_entidad = Entidad::all()->lists('full_name_entidad', 'id');
        $nombre_persona = Entidad::all()->lists('full_name_persona', 'id');
        $tipo = $request->input('tipo');
        return view('componentes.opcion_grado_proyeccion.addopcion_grado', compact('tipo', 'route', 'nombre_profesor', 'nombre_entidad', 'nombre_persona', 'indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOpcionGradoRequest $request)
    {
        OpcionGrado::create($request->all());
        return redirect('opcion-grado-proyeccion')-> with('message','Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador_modulo = 14;
        $opcion_grados = OpcionGrado::where('opcion_grado.id', $id)
        ->get();
        $director = \DB::table('opcion_grado')
        ->join('profesores', 'opcion_grado.id_director', '=', 'profesores.id')
        ->select('opcion_grado.id', 'opcion_grado.descripcion',
           DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS name_director"))
        ->where('opcion_grado.id', $id)
        ->get();
        $externo = \DB::table('opcion_grado')
        ->join('entidad', 'opcion_grado.id_externo', '=', 'entidad.id')
        ->select('entidad.nombre_entidad AS nombre_externo')
        ->get();
        $entidad = \DB::table('opcion_grado')
        ->join('entidad', 'opcion_grado.id_entidad', '=', 'entidad.id')
        ->select('entidad.nombre_entidad AS nombre_entidad')
        ->get();
        $supervisor = \DB::table('opcion_grado')
        ->join('profesores', 'opcion_grado.id_supervisor', '=', 'profesores.id')
        ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS name_supervisor"))
        ->where('opcion_grado.id', $id)
        ->get();
        $estudiantes = \DB::table('sustentacion')
        ->join('estudiantes', 'sustentacion.id_estudiante', '=', 'estudiantes.codigo_estudiante')
        ->join('opcion_grado', 'sustentacion.id_opcion_grado', '=', 'opcion_grado.id')
        ->select('sustentacion.id','estudiantes.codigo_estudiante', 'estudiantes.email', 'estudiantes.telefono', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS full_name"))
        ->where('opcion_grado.id', $id)
        ->get();
        $nombre_estudiante = Estudiante::all()->lists('full_name', 'codigo_estudiante');
        if($opcion_grados[0]->tipo_opcion_grado == "Pasantía")
              return view('componentes.opcion_grado_proyeccion.show.show_pas', compact('estudiantes', 'opcion_grados', 'supervisor', 'nombre_estudiante','entidad', 'director','externo', 'indicador_modulo'));
        if($opcion_grados[0]->tipo_opcion_grado == "EPPS")
              return view('componentes.opcion_grado_proyeccion.show.show_epps', compact('estudiantes', 'opcion_grados', 'supervisor', 'nombre_estudiante','entidad', 'director','externo', 'indicador_modulo'));
        if($opcion_grados[0]->tipo_opcion_grado == "Posgrado")
              return view('componentes.opcion_grado_proyeccion.show.show_pos', compact('estudiantes', 'opcion_grados', 'supervisor', 'nombre_estudiante','entidad', 'director','externo', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 14;
        $opciongrado=OpcionGrado::find($id);
        $route = [ 'route'=>['opcion-grado-proyeccion.update',$opciongrado->id],'method'=>'PUT'];
        $nombre_entidad = Entidad::all()->lists('full_name_entidad', 'id');
        $nombre_persona = Entidad::all()->lists('full_name_persona', 'id');
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        return view('componentes.opcion_grado_proyeccion.editopcion_grado', compact('route','opciongrado', 'nombre_profesor', 'nombre_entidad','nombre_persona', 'indicador_modulo'));
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
        $opciongrado=OpcionGrado::find($id);
        $opciongrado->fill($request->all());
        $opciongrado->save();

        Session::flash('message','Registro Actualizado!');
        return redirect::to('opcion-grado-proyeccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OpcionGrado::destroy($id);
        Session::flash('message','Registro Eliminado!');
        //return Redirect::to('/opcion-grado-proyeccion');
    }
}
