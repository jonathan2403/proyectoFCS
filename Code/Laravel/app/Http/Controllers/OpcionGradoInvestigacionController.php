<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateOpcionGradoRequest;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Estudiante;
use FCS\OpcionGrado;
use FCS\Proyecto;
use FCS\Entidad;
use FCS\Grupo;
use DB, View, Session, Redirect;

class OpcionGradoInvestigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $indicador_modulo = 7;
       $opciongrados=OpcionGrado::whereIn('tipo_opcion_grado', ['epi', 'mi', 'mr'])
        ->get();
        return view('componentes.opcion_grado_investigacion.index', compact('opciongrados', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $indicador_modulo = 7;
        $route = [ 'route' => 'opcion-grado-investigacion.store','method'=>'POST' ];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_proyecto = Proyecto::all()->lists('full_name', 'id');
        $nombre_grupo = Grupo::all()->lists('full_name', 'id');
        $nombre_entidad = Entidad::all()->lists('nombre_entidad', 'id');
        $tipo = $request->input('tipo');
        return view('componentes.opcion_grado_investigacion.addopcion_grado', compact('tipo', 'route', 'nombre_profesor', 'nombre_proyecto', 'nombre_grupo', 'nombre_entidad', 'indicador_modulo'));
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
        return redirect('opcion-grado-investigacion')-> with('message','Registro Exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador_modulo = 7;
        $director = \DB::table('opcion_grado')
        ->join('profesores', 'opcion_grado.id_director', '=', 'profesores.id')
        ->select('opcion_grado.id', 'opcion_grado.descripcion',
           DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS name_director"))
        ->where('opcion_grado.id', $id)
        ->get();
        $supervisor = \DB::table('opcion_grado')
        ->join('profesores', 'opcion_grado.id_supervisor', '=', 'profesores.id')
        ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS name_supervisor"))
        ->where('opcion_grado.id', $id)
        ->get();
        $grupo = \DB::table('opcion_grado')
        ->join('grupo', 'opcion_grado.id_grupo', '=', 'grupo.id')
        ->select('grupo.sigla')
        ->where('opcion_grado.id', $id)
        ->get();
        $entidad = \DB::table('opcion_grado')
        ->join('entidad', 'opcion_grado.id_entidad', '=', 'entidad.id')
        ->select('entidad.nombre_entidad AS nombre_entidad')
        ->get();
        $estudiantes = \DB::table('sustentacion')
        ->join('estudiantes', 'sustentacion.id_estudiante', '=', 'estudiantes.codigo_estudiante')
        ->join('opcion_grado', 'sustentacion.id_opcion_grado', '=', 'opcion_grado.id')
        ->select('sustentacion.id', 'estudiantes.numero_documento', 'estudiantes.codigo_estudiante', 'estudiantes.email', 'estudiantes.telefono', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS full_name"))
        ->where('opcion_grado.id', $id)
        ->get();
        $nombre_proyecto = \DB::table('opcion_grado')
        ->join('proyecto', 'opcion_grado.id_proyecto', '=', 'proyecto.id')
        ->select('titulo_proyecto')
        ->where('opcion_grado.id', $id)
        ->get();
        $nombre_estudiante = Estudiante::all()->lists('full_name', 'codigo_estudiante');
        $opcion_grados = OpcionGrado::where('id', $id)
        ->get();
        if($opcion_grados[0]->tipo_opcion_grado == 'Mon. Investigativa' || $opcion_grados[0]->tipo_opcion_grado == 'Mon. de Revisión')
            return view('componentes.opcion_grado_investigacion.show.show_mon', compact('estudiantes', 'director', 'nombre_estudiante', 'opcion_grados', 'supervisor', 'grupo', 'nombre_proyecto', 'entidad', 'indicador_modulo'));
        else
            return view('componentes.opcion_grado_investigacion.show.show_epi', compact('estudiantes', 'director', 'nombre_estudiante', 'opcion_grados', 'supervisor', 'grupo', 'nombre_proyecto', 'entidad', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 7;
        $opciongrado=OpcionGrado::find($id);
        $route = [ 'route'=>['opcion-grado-investigacion.update',$opciongrado->id],'method'=>'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_proyecto = Proyecto::all()->lists('full_name', 'id');
        $nombre_grupo = Grupo::all()->lists('full_name', 'id');
        $nombre_entidad = Entidad::all()->lists('nombre_entidad', 'id');
        return view('componentes.opcion_grado_investigacion.editopcion_grado', compact('route','opciongrado', 'nombre_profesor', 'nombre_proyecto', 'nombre_grupo', 'nombre_entidad', 'indicador_modulo'));
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
        return redirect::to('opcion-grado-investigacion');
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
        return Redirect::to('/opcion-grado-investigacion');
    }
}
