<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\EducacionContinua;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use DB, View, Session, Redirect;
use FCS\Profesor;
use FCS\Estudiante;
use FCS\Base\ExportFiles;

class EducacionContinuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 18;
        $edus = EducacionContinua::join('profesores', 'educacion_continua.id_director', '=', 'profesores.id')
        ->select('educacion_continua.id', 'educacion_continua.nombre', 'educacion_continua.fecha_aprobacion', 'educacion_continua.numero_acta'
            , 'educacion_continua.pais','educacion_continua.ciudad', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->get();
        return view('componentes.educacion_continua.index', compact('edus', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $indicador_modulo = 18;
       $route = [ 'route' => 'educacion-continua.store', 'method' => 'POST' ];
       $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        return view('componentes.educacion_continua.addeducacion_continua',compact('route', 'nombre_profesor', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, EducacionContinua::$reglas_crear, EducacionContinua::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }else{
            EducacionContinua::create($datos);    
        }
        return redirect('educacion-continua')->with('message','Registro Creado!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador_modulo = 18;
        $educacion_continua = EducacionContinua::select('id', 'nombre', 'fecha_inicio', 'departamento', 'ciudad', 'recurso', 'horas_certificadas',
            'area_conocimiento', 'recurso_humano', 'muebles_equipo', 'servicios', 'material', 'gastos_viaje',
            'otros_gastos', 'horas_certificadas')
        ->where('id', $id)
        ->first();
        if(!$educacion_continua)
            return redirect()->back();
        $profesores = \DB::table('participacion')
        ->join('profesores', 'participacion.id_profesor', '=', 'profesores.id')
        ->join('educacion_continua', 'participacion.id_educacion_continua', '=', 'educacion_continua.id')
        ->select('participacion.id', 'profesores.telefono', 'profesores.cedula', 'profesores.email', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->where('educacion_continua.id', $id)
        ->get();
        $estudiantes = \DB::table('participacion')
        ->join('estudiantes', 'participacion.id_estudiante', '=', 'estudiantes.id')
        ->join('educacion_continua', 'participacion.id_educacion_continua', '=', 'educacion_continua.id')
        ->select('participacion.id', 'estudiantes.telefono', 'estudiantes.numero_documento', 'estudiantes.email', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.segundo_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS full_name"))
        ->where('educacion_continua.id', $id)
        ->get();
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $nombre_estudiante = Estudiante::all()->lists('full_name', 'id');
        return view('componentes.educacion_continua.showeducacion_continua', compact('educacion_continua', 'profesores', 'estudiantes', 'nombre_profesor', 'nombre_estudiante', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 18;
        $educacion_continua = EducacionContinua::find($id);
        if(!$educacion_continua)
            return redirect()->back();
        $route = [ 'route'=>['educacion-continua.update',$educacion_continua->id],'method'=>'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        return view('componentes.educacion_continua.editeducacion_continua', compact('route', 'nombre_profesor', 'educacion_continua', 'indicador_modulo'));
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
        $educacion_continua=EducacionContinua::find($id);
        $educacion_continua->fill($request->all());
        $educacion_continua->save();
        Session::flash('message','Registro Actualizado!');
        return redirect::to('educacion-continua');
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

    /**
     * Genera reporte
     */
    public function reporte($tipo_archivo){
        $edus = EducacionContinua::join('profesores', 'educacion_continua.id_director', '=', 'profesores.id')
        ->select('educacion_continua.id', 'educacion_continua.nombre', 'educacion_continua.fecha_aprobacion', 'educacion_continua.numero_acta'
            , 'educacion_continua.pais','educacion_continua.ciudad', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->get();
        $reporte = new ExportFiles();
        switch($tipo_archivo){
            case 'excel':
            $reporte->createExcel($edus, 'Educación Continua', 'E1');
            break;
            default:
            $reporte->createPdf($edus, 'Educación Continua', 'E1');
            break;
        }
    }

}
