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
use FCS\Externo;
use FCS\Sustentacion;
use FCS\Grupo;
use DB, View, Session, Redirect;
use FCS\Base\ExportFiles;

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
       $opciongrados=OpcionGrado::select('id', 'descripcion', 'tipo_opcion_grado', 'fecha_aprobacion', 'fecha_entrega_informe_final', \DB::raw("CASE WHEN finalizado='s' THEN 'Si' ELSE 'No' END AS finalizado"))
        ->whereIn('tipo_opcion_grado', ['epi', 'mi', 'mr'])
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
        $tipo = $request->input('tipo');
        if($tipo != 'mr' && $tipo != 'epi' && $tipo != 'mi')
            return redirect()->back();
        $indicador_modulo = 7;
        $route = [ 'route' => 'opcion-grado-investigacion.store','method'=>'POST' ];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_proyecto = Proyecto::all()->lists('full_name', 'id');
        $nombre_grupo = Grupo::all()->lists('full_name', 'id');
        $nombre_entidad = Externo::all()->lists('full_name_entidad', 'id')->toArray();
        return view('componentes.opcion_grado_investigacion.addopcion_grado', compact('tipo', 'route', 'nombre_profesor', 'nombre_proyecto', 'nombre_grupo', 'nombre_entidad', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, OpcionGrado::$reglas_investigacion, OpcionGrado::$mensajes_investigacion);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }
        OpcionGrado::create($datos);
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
        $opciongrado = OpcionGrado::find($id);
        if(!$opciongrado)
            return redirect()->back();
        $indicador_modulo = 7;
        $director = OpcionGrado::join('profesores', 'opcion_grado.id_director', '=', 'profesores.id')
        ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS nombre_director"))
        ->where('opcion_grado.id', $id)
        ->first();
        $supervisor = OpcionGrado::join('profesores', 'opcion_grado.id_supervisor', '=', 'profesores.id')
        ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS nombre_supervisor"))
        ->where('opcion_grado.id', $id)
        ->first();
        $entidad = OpcionGrado::join('externo', 'opcion_grado.id_externo', '=', 'externo.id')
        ->select('externo.nombre_externo AS nombre_entidad')
        ->first();
        $grupo = OpcionGrado::join('grupo', 'opcion_grado.id_grupo', '=', 'grupo.id')
        ->select('grupo.sigla')
        ->where('opcion_grado.id', $id)
        ->first();
        $estudiantes = Sustentacion::join('estudiantes', 'sustentacion.id_estudiante', '=', 'estudiantes.id')
        ->join('opcion_grado', 'sustentacion.id_opcion_grado', '=', 'opcion_grado.id')
        ->select('sustentacion.id as sustentacion', 'estudiantes.numero_documento', 'estudiantes.codigo_estudiante', 'estudiantes.email', 'estudiantes.telefono', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS nombre_estudiante"))
        ->where('opcion_grado.id', $id)
        ->get();
        $nombre_proyecto = OpcionGrado::join('proyecto', 'opcion_grado.id_proyecto', '=', 'proyecto.id')
        ->select('titulo_proyecto')
        ->where('opcion_grado.id', $id)
        ->first();
        $nombre_estudiante = Estudiante::all()->lists('full_name', 'id');
        if($opciongrado->tipo_opcion_grado == 'Mon. Investigativa' || $opciongrado->tipo_opcion_grado == 'Mon. de Revisión')
            return view('componentes.opcion_grado_investigacion.show.show_mon', compact('estudiantes', 'director', 'nombre_estudiante', 'opciongrado', 'supervisor', 'grupo', 'nombre_proyecto', 'entidad', 'indicador_modulo'));
        else
            return view('componentes.opcion_grado_investigacion.show.show_epi', compact('estudiantes', 'director', 'nombre_estudiante', 'opciongrado', 'supervisor', 'grupo', 'nombre_proyecto', 'entidad', 'indicador_modulo'));
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
        $nombre_entidad = Externo::all()->lists('nombre_entidad', 'id');
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

    /**
     * Descargar Excel
     */
    public function Exportexcel($tipo){
    $opciongrados = OpcionGrado::select('descripcion as Título', \DB::raw("CASE WHEN tipo_opcion_grado='mr' THEN 'Mon. de Revisión' WHEN tipo_opcion_grado='mi' THEN 'Mon. Investigativa' ELSE 'Proyecto EPI' END AS Tipo"), 'fecha_aprobacion as Aprobación', 'fecha_entrega_informe_final as Informe_Final', \DB::raw("CASE WHEN finalizado='s' THEN 'Si' ELSE 'No' END AS Finalizado"))
        ->whereIn('tipo_opcion_grado', ['epi', 'mi', 'mr'])
        ->get();
    $exportExcel = new ExportFiles();
    $exportExcel->createExcel($opciongrados, 'Opciones de Grado', 'E1');
    }

    /**
     * Descargar PDF
     */
    public function ExportPdf($tipo){
        $opciongrados = OpcionGrado::select('descripcion as Título', \DB::raw("CASE WHEN tipo_opcion_grado='mr' THEN 'Mon. de Revisión' WHEN tipo_opcion_grado='mi' THEN 'Mon. Investigativa' ELSE 'Proyecto EPI' END AS Tipo"), 'fecha_aprobacion as Aprobación', 'fecha_entrega_informe_final as Informe_Final', \DB::raw("CASE WHEN finalizado='s' THEN 'Si' ELSE 'No' END AS Finalizado"))
        ->whereIn('tipo_opcion_grado', ['epi', 'mi', 'mr'])
        ->get();
        $exportExcel = new ExportFiles();
        $exportExcel->createPdf($opciongrados, 'Opciones de Grado', 'E1');
    }
}
