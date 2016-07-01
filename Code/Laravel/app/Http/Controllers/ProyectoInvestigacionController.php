<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateProyectoRequest;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Proyecto;
use FCS\Participacion;
use FCS\RedConocimiento;
use DB, View, Session, Redirect;
use FCS\TipoProyecto;
use FCS\Base\ExportFiles;


class ProyectoInvestigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 9;
        $proyectos = Proyecto::select('id', 'id_director', 'titulo_proyecto', 'tema_central', DB::raw("CASE WHEN proyecto.tipo_proyecto='cp' THEN 'Conv. Planta' WHEN proyecto.tipo_proyecto='ccr' THEN 'Conv. con Recursos' WHEN proyecto.tipo_proyecto='cc' THEN 'Conv. Colciencias' WHEN proyecto.tipo_proyecto='cct' THEN 'Conv. con Tiempo' WHEN proyecto.tipo_proyecto='cre' THEN 'Conv. con Rec. Externos' END AS tipo"), 'ejecutado')
        ->where('tipo', 'i')
        ->get();
        return view('componentes.proyectos-investigacion.index', compact('proyectos', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 9;
        $route = [ 'route' => 'proyectos-investigacion.store','method'=>'POST' ];
        $tipo_proyecto = TipoProyecto::allLists();
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_red = RedConocimiento::all()->lists('full_name', 'id');
        return view('componentes.proyectos-investigacion.addproyecto', compact('route', 'tipo_proyecto', 'nombre_profesor', 'nombre_red', 'indicador_modulo'));
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
        $this->validate($request, Proyecto::$reglas, Proyecto::$mensajes);
        Proyecto::create($datos);
        return redirect('proyectos-investigacion')->with('message','Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        if(!$proyecto)
            return redirect()->back();
        $indicador_modulo = 9;
        $proyectos = DB::table('proyecto')
        ->where('proyecto.id', $id)
        ->get();
        $profesores = Participacion::join('profesores', 'participacion.id_profesor', '=', 'profesores.id')
        ->join('proyecto', 'participacion.id_proyecto', '=', 'proyecto.id')
        ->select('participacion.id', 'profesores.telefono', 'profesores.cedula', 'profesores.email', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->where('proyecto.id', $id)
        ->get();
        $bienes = \DB::table('adquisicion')
        ->join('proyecto', 'adquisicion.id_proyecto', '=', 'proyecto.id')
        ->select('adquisicion.id', 'adquisicion.nombre_articulo', 'adquisicion.cantidad', 'adquisicion.valor_unidad')
        ->where('proyecto.id', $id)
        ->get();
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        return view('componentes.proyectos-investigacion.showProyecto', compact('proyectos', 'profesores', 'nombre_profesor', 'bienes', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 9;
        $proyecto=Proyecto::find($id);
        $route = [ 'route'=>['proyectos-investigacion.update',$proyecto->id],'method'=>'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_red = RedConocimiento::all()->lists('full_name', 'id');
        return view('componentes.proyectos-investigacion.editproyecto', compact('route','proyecto', 'nombre_profesor', 'nombre_red', 'indicador_modulo'));
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
        $datos = $request->all();
        $this->validate($request, Proyecto::$reglas, Proyecto::$mensajes);
        $proyecto=Proyecto::find($id);
        $proyecto->fill($datos);
        $proyecto->save();
        return redirect::to('proyectos-investigacion')->with('message', 'Registro editado!');
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
        return Redirect::to('/proyectos-investigacion');
    }

    /**
     * Generación de reporte [Excel, PDF]
     */
    public function reporte($tipo_proyecto, $tipo_archivo){
        switch($tipo_proyecto){
            case 'investigacion':
            $proyectos = Proyecto::join('profesores', 'proyecto.id_investigador_principal', '=', 'profesores.id')
                ->select('proyecto.titulo_proyecto as Título', DB::raw("CASE WHEN proyecto.tipo_proyecto='cp' THEN 'Conv. Planta' WHEN proyecto.tipo_proyecto='ccr' THEN 'Conv. con Recursos' WHEN proyecto.tipo_proyecto='cc' THEN 'Conv. Colciencias' WHEN proyecto.tipo_proyecto='cct' THEN 'Conv. con Tiempo' WHEN proyecto.tipo_proyecto='cre' THEN 'Conv. con Rec. Externos' END AS Tipo"), 'proyecto.ejecutado',
                        DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS Investigador"))
                ->where('tipo', 'i')
                ->get();
                $celda_fin = 'D1';
            break;

            case 'proyeccion':
            $proyectos = Proyecto::join('profesores', 'proyecto.id_investigador_principal', '=', 'profesores.id')
                ->select('proyecto.numero_acta AS Número_Acta', 'proyecto.titulo_proyecto AS Título', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS Investigador_Principal"), 'proyecto.fecha_inicio AS Fecha_Inicio', 'proyecto.ejecutado AS Ejecutado')
                ->where('tipo', 'ps')
                ->get();
                $celda_fin = 'E1';
            break;

        }
        $reporte = new ExportFiles();
        if($tipo_archivo == 'excel')
            $reporte->createExcel($proyectos, 'Proyectos', $celda_fin);
        else
            $reporte->createPdf($proyectos, 'Proyectos', $celda_fin);
    }

}
