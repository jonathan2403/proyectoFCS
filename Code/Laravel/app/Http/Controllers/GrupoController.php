<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Grupo;
use FCS\Profesor;
use FCS\Estudiante;
use FCS\Adscripcion;
use DB, View, Session, Redirect;
use FCS\Base\ExportFiles;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tipo_grupo)
    {
        if($tipo_grupo != 'investigacion' && $tipo_grupo != 'proyeccion')
            return redirect()->back();
        switch($tipo_grupo){
        case 'investigacion':
        $indicador_modulo = 1;
        $grupos = Grupo::select('id', 'sigla', 'descripcion', 'id_profesor', 'categoria', DB::raw("CASE WHEN grupo.tipo='i' THEN 'Investivagión' WHEN grupo.tipo='e' THEN 'Estudio' WHEN grupo.tipo='ps' THEN 'Proyección Social' END AS tipo"))
        ->whereIn('grupo.tipo', ['i', 'e'])
        ->get();
        break;
        case 'proyeccion':
        $indicador_modulo = 20;
        $grupos = Grupo::select('id', 'sigla', 'descripcion', 'id_profesor', 'categoria', DB::raw("CASE WHEN grupo.tipo='i' THEN 'Investivagión' WHEN grupo.tipo='e' THEN 'Estudio' WHEN grupo.tipo='ps' THEN 'Proyección Social' END AS tipo"))
        ->where('grupo.tipo', 'ps')
        ->get();
        break;
        }
        return view('componentes.grupo.index', compact('grupos', 'tipo_grupo', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tipo_grupo)
    {
        if($tipo_grupo == 'investigacion')
            $indicador_modulo = 1;
        else
            $indicador_modulo = 20;
        $route = [ 'route' => 'grupos.store','method'=>'POST' ];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        return view('componentes.grupo.addgrupo', compact('route', 'nombre_profesor', 'tipo_grupo', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, Grupo::$reglas, Grupo::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }
        Grupo::create($datos);
        if($datos['tipo'] == 'ps')
            return redirect('grupos/proyeccion')->with('message','Registro Creado!');
        else
            return redirect('grupos/investigacion')->with('message','Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!is_numeric($id) || !$grupo=Grupo::find($id))
           return redirect()->back();
        $indicador_modulo = 1;
        $estudiantes = Adscripcion::join('estudiantes', 'adscripcion.id_estudiante', '=', 'estudiantes.id')
        ->join('grupo', 'adscripcion.id_grupo', '=', 'grupo.id')
        ->select('adscripcion.id', 'estudiantes.numero_documento', 'estudiantes.codigo_estudiante', 'estudiantes.email')
        ->where('grupo.id', $id)
        ->get();
        if($grupo->tipo == 'ps')
            $indicador_modulo = 20;
        return view('componentes.grupo.showgrupo', compact('grupo', 'estudiantes', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_grupo = 'investigacion';
        $indicador_modulo = 1;
        $grupo=Grupo::find($id);
        if(!$grupo)
            return redirect()->back();
        if($grupo->tipo == 'ps'){
            $indicador_modulo = 20;
            $tipo_grupo = 'proyeccion';
        }
        return view('componentes.grupo.editgrupo', compact('route','grupo', 'tipo_grupo', 'indicador_modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $datos = request()->all();
        $grupo = Grupo::find($datos['id_grupo']);
        $valida = \Validator::make($datos, Grupo::$reglas, Grupo::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors());
        }
        $grupo->fill($datos);
        $grupo->save();
        if($grupo->tipo == 'ps')
            return redirect('grupos/proyeccion')->with('message','Registro Actualizado!');
        else
            return redirect('grupos/investigacion')->with('message','Registro Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grupo::destroy($id);
        Session::flash('message','Registro Eliminado!');
        return Redirect::to('/grupos');
    }

    /**
     * Genera Informes [pdf, excel]
     */
    public function reporte($tipo_archivo, $tipo_grupo){
       switch ($tipo_grupo) {
            case 'investigacion':
                $grupos = Grupo::join('profesores', 'grupo.id_profesor', '=', 'profesores.id')
                ->select('grupo.sigla as Sigla', 'grupo.descripcion as Nombre', 'grupo.categoria as Categoría', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS Coordinador"), DB::raw("CASE WHEN grupo.tipo='i' THEN 'Investigación' WHEN grupo.tipo='e' THEN 'Estudio' END AS Tipo"))
                ->where('grupo.tipo', 'i')
                ->orWhere('grupo.tipo', 'e')
                ->get();
                $reporte = new ExportFiles();
                if($tipo_archivo == 'excel')
                    $reporte->createExcel($grupos, 'Grupos de '.$tipo_grupo, 'E1');
                else
                    $reporte->createPdf($grupos, 'Grupos de '.$tipo_grupo, 'E1');
                break;

            case 'proyeccion':
                $grupos = Grupo::join('profesores', 'grupo.id_profesor', '=', 'profesores.id')
                ->select('grupo.sigla as Sigla', 'grupo.descripcion as Nombre', 'grupo.categoria as Categoría', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS Coordinador"), DB::raw("CASE WHEN grupo.tipo='i' THEN 'Investigación' WHEN grupo.tipo='e' THEN 'Estudio' END AS Tipo"))
                ->where('grupo.tipo', 'ps')
                ->get();
                $reporte = new ExportFiles();
                if($tipo_archivo == 'excel')
                    $reporte->createExcel($grupos, 'Grupos de '.$tipo_grupo, 'E1');
                else
                    $reporte->createPdf($grupos, 'Grupos de '.$tipo_grupo, 'E1');
                break;
        } // fin case
    }  // fin función reporte

}
