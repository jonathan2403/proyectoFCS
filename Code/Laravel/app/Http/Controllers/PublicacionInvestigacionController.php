<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreatePublicacionRequest;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Proyecto;
use FCS\Grupo;
use FCS\Publicacion;
use FCS\OpcionGrado;
use FCS\Estudiante;
use DB, View, Session, Redirect;

class PublicacionInvestigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 11;
         $publicaciones=\DB::table('publicacion')
         ->where('tipo_publicacion', 'i')
         ->get ();
       return view('componentes.publicacion_investigacion.index', compact('publicaciones', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 11;
        $route = [ 'route' => 'publicacion-investigacion.store','method'=>'POST' ];
        $nombre_grupo = Grupo::all()->lists('full_name','id');
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_proyecto = Proyecto::all()->lists('full_name','id');
        $nombre_opcion_grado = OpcionGrado::all()->lists('full_name', 'id');
        return view('componentes.publicacion_investigacion.addpublicacion', compact('route','nombre_proyecto','nombre_grupo','nombre_profesor', 'nombre_opcion_grado', 'indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePublicacionRequest $request)
    {
        Publicacion::create($request->all());
         return redirect('publicacion-investigacion')-> with('message','Registro Exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $indicador_modulo = 11;
      $publicaciones = \DB::table('publicacion')
        ->join('grupo', 'publicacion.id_grupo', '=', 'grupo.id')
        ->where('publicacion.id', $id)
        ->select('publicacion.id',  'publicacion.descripcion', 'grupo.sigla')
        ->get();
      $proyecto = \DB::table('publicacion')
        ->join('proyecto', 'publicacion.id_proyecto', '=', 'proyecto.id')
        ->where('publicacion.id', $id)
        ->select('proyecto.titulo_proyecto')
        ->get();
      $opcion_grado = \DB::table('publicacion')
        ->join('opcion_grado', 'publicacion.id_opcion_grado', '=', 'opcion_grado.id')
        ->where('publicacion.id', $id)
        ->select('opcion_grado.descripcion')
        ->get();
       $nombre_estudiante = Estudiante::all()->lists('full_name', 'id');
       $publica = \DB::table('publica')
       //->join('publicacion', 'publica.id_publicacion', '=', 'publicacion.id')
       ->join('profesores', 'publica.id_profesor', '=', 'profesores.id')
       //->join('estudiantes', 'publica.id_estudiante', '=', 'estudiantes.id')
       ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS nombre_profesor"))
       /*->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS nombre_profesor"))*/
       ->where('publica.id_publicacion', $id)
       ->get();
       

        return view('componentes.publicacion_investigacion.showPublicacion', compact('publicaciones', 'proyecto', 'opcion_grado', 'nombre_estudiante', 'publica', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 11;
        $publicacion=Publicacion::find($id);
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $nombre_proyecto = Proyecto::all()->lists('full_name', 'id');
        $nombre_grupo = Grupo::all()->lists('full_name', 'id');
        $route = [ 'route'=>['publicacion.update',$publicacion->id],'method'=>'PUT'];
        return view('componentes.publicacion_investigacion.editpublicacion', compact('route', 'publicacion', 'nombre_proyecto', 'nombre_profesor', 'nombre_grupo', 'indicador_modulo'));
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
        $publicacion=Publicacion::find($id);
        $publicacion->fill($request->all());
        $publicacion->save();
        Session::flash('message','Registro Actualizado!');
        return redirect::to('publicacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publicacion::destroy($id);
        Session::flash('message','Publicacion Eliminada Correctamente');
        return Redirect::to('/publicacion');
    }
}
