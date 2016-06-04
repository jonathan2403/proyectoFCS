<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Proyecto;
use FCS\Grupo;
use FCS\Publicacion;
use FCS\OpcionGrado;
use FCS\Estudiante;
use FCS\Publica;
use DB, View, Session, Redirect;

class PublicacionProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 19;
        $publicaciones = Publicacion::where('tipo_publicacion','ps')
         ->get();
       return view('componentes.publicacion_proyeccion.index', compact('publicaciones', 'indicador_modulo'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 19;
        $route = [ 'route' => 'publicacion-proyeccion.store','method'=>'POST' ];
        $nombre_grupo = Grupo::all()->lists('full_name','id');
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_proyecto = Proyecto::all()->lists('full_name','id');
        $nombre_opcion_grado = OpcionGrado::all()->lists('full_name', 'id');
        return view('componentes.publicacion_proyeccion.addpublicacion', compact('route','nombre_proyecto','nombre_grupo','nombre_profesor', 'nombre_opcion_grado', 'indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Publicacion::$reglas);
        Publicacion::create($request->all());
        return redirect('publicacion-proyeccion')->with('message','Regsitro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador_modulo = 19;
        $publicacion = Publicacion::find($id);
        if(!$publicacion)
            return redirect()->back();
      $proyecto = Publicacion::join('proyecto', 'publicacion.id_proyecto', '=', 'proyecto.id')
        ->where('publicacion.id', $id)
        ->select('proyecto.titulo_proyecto')
        ->first();
      $opcion_grado = Publicacion::join('opcion_grado', 'publicacion.id_opcion_grado', '=', 'opcion_grado.id')
        ->where('publicacion.id', $id)
        ->select('opcion_grado.descripcion')
        ->first();
       $profesores = Publica::join('profesores', 'publica.id_profesor', '=', 'profesores.id')
       ->select('publica.id', 'profesores.cedula', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS nombre_profesor"), 'profesores.telefono', 'profesores.email')
       ->where('publica.id_publicacion', $id)
       ->get();
       $estudiantes = Publica::join('estudiantes', 'publica.id_estudiante', '=', 'estudiantes.id')
        ->select('publica.id', 'estudiantes.numero_documento','estudiantes.codigo_estudiante', 'estudiantes.email', 'estudiantes.telefono', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS full_name"))
        ->where('publica.id_publicacion', $id)
        ->get();
        $publicaciones = Publica::where('id_publicacion', $id)->get();
        return view('componentes.publicacion_proyeccion.showPublicacion', compact('publicacion', 'proyecto', 'opcion_grado', 'publicaciones', 'estudiantes', 'profesores', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 19;
        $publicacion=Publicacion::find($id);
        if(!$publicacion)
            return redirect()->back();
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $nombre_proyecto = Proyecto::all()->lists('full_name', 'id');
        $nombre_grupo = Grupo::all()->lists('full_name', 'id');
        $nombre_opcion_grado = OpcionGrado::all()->lists('full_name', 'id');
        $route = [ 'route'=>['publicacion-proyeccion.update',$publicacion->id],'method'=>'PUT'];
        return view('componentes.publicacion_proyeccion.editpublicacion', compact('route', 'publicacion', 'nombre_proyecto', 'nombre_profesor', 'nombre_grupo', 'nombre_opcion_grado', 'indicador_modulo'));
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
        return redirect::to('publicacion-proyeccion');
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
