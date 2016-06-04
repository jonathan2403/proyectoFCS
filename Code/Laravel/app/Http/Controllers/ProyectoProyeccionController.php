<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateProyectoRequest;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Proyecto;
use FCS\Estudiante;
use FCS\Participacion;
use DB, View, Session, Redirect;
use FCS\TipoProyecto;

class ProyectoProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 15;
        $proyectos = Proyecto::join('profesores', 'proyecto.id_investigador_principal', '=', 'profesores.id')
        ->select( 'proyecto.id', 'proyecto.titulo_proyecto', 'proyecto.tipo_proyecto', 'proyecto.fecha_inicio', 'proyecto.ejecutado', 'proyecto.numero_acta',
              DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS nombre_profesor"))
        ->where('tipo', 'ps')
        ->get();
        return view('componentes.proyectos-proyeccion.index', compact('proyectos', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 15;
        $route = [ 'route' => 'proyectos-proyeccion.store','method'=>'POST' ];
        $tipo_proyecto = TipoProyecto::allLists();
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        return view('componentes.proyectos-proyeccion.addproyecto', compact('route', 'tipo_proyecto', 'nombre_profesor', 'indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProyectoRequest $request)
    {
         Proyecto::create($request->all());
        return redirect('proyectos-proyeccion')->with('message','Proyecto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador_modulo = 15;
        $proyecto = Proyecto::find($id);
            if(!$proyecto)
                return redirect()->back();
        $profesores = Participacion::join('profesores', 'participacion.id_profesor', '=', 'profesores.id')
        ->join('proyecto', 'participacion.id_proyecto', '=', 'proyecto.id')
        ->select('participacion.id', 'profesores.telefono', 'profesores.cedula', 'profesores.email', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->where('proyecto.id', $id)
        ->get();
        $estudiantes = Participacion::join('estudiantes', 'participacion.id_estudiante', '=', 'estudiantes.id')
        ->join('proyecto', 'participacion.id_proyecto', '=', 'proyecto.id')
        ->select('participacion.id', 'estudiantes.telefono', 'estudiantes.numero_documento', 'estudiantes.email', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.segundo_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS full_name"))
        ->where('proyecto.id', $id)
        ->get();
        $investigador_principal = Proyecto::join('profesores', 'proyecto.id_investigador_principal', '=', 'profesores.id')
        ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->where('proyecto.id', $id)
        ->get();
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $nombre_estudiante = Estudiante::all()->lists('full_name', 'id');
        $participaciones = Participacion::where('id_proyecto', $id)
                         ->get();
        return view('componentes.proyectos-proyeccion.showProyecto', compact('proyecto', 'profesores', 'nombre_profesor', 'nombre_estudiante', 'investigador_principal', 'estudiantes', 'indicador_modulo', 'participaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 15;
        $proyecto=Proyecto::find($id);
        $route = [ 'route'=>['proyectos-proyeccion.update',$proyecto->id],'method'=>'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        return view('componentes.proyectos-proyeccion.editproyecto', compact('route','proyecto', 'nombre_profesor', 'indicador_modulo'));
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
        $proyecto=Proyecto::find($id);
        $proyecto->fill($request->all());
        $proyecto->save();
        Session::flash('message','Registro Actualizado!');
        return redirect::to('proyectos-proyeccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::destroy($id);
        Session::flash('message','Registro Eliminado!');
        return Redirect::to('/proyectos-proyeccion');
    }
}
