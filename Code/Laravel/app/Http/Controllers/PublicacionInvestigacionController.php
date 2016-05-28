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
use FCS\Base\ExportFiles;
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
         $publicaciones = Publicacion::where('tipo_publicacion', 'i')
         ->get();
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
    public function store(Request $request)
    {
        $datos = $request->all();
        $valida = \Validator::make($datos, Publicacion::$reglas);
        if($valida->fails())
            return redirect()->back()->withErrors($valida->errors())->withInput();
        Publicacion::create($datos);
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
      $publicacion = Publicacion::find($id);
      if(!$publicacion)
        return redirect()->back();
      $indicador_modulo = 11;
      $proyecto = Publicacion::join('proyecto', 'publicacion.id_proyecto', '=', 'proyecto.id')
        ->where('publicacion.id', $id)
        ->select('proyecto.titulo_proyecto')
        ->first();
      $opcion_grado = Publicacion::join('opcion_grado', 'publicacion.id_opcion_grado', '=', 'opcion_grado.id')
        ->where('publicacion.id', $id)
        ->select('opcion_grado.descripcion')
        ->first();
       $grupo = Publicacion::join('grupo', 'publicacion.id_grupo', '=', 'grupo.id')
        ->select('grupo.sigla')
        ->where('publicacion.id', $id)
        ->first();
       $nombre_estudiante = Estudiante::all()->lists('full_name', 'id');
       $publica = \DB::table('publica')
       ->join('profesores', 'publica.id_profesor', '=', 'profesores.id')
       ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS nombre_profesor"))
       ->where('publica.id_publicacion', $id)
       ->get();
        return view('componentes.publicacion_investigacion.showPublicacion', compact('publicacion', 'proyecto', 'opcion_grado', 'grupo', 'nombre_estudiante', 'publica', 'indicador_modulo'));
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
        $publicacion = Publicacion::find($id);
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $nombre_proyecto = Proyecto::all()->lists('full_name', 'id');
        $nombre_opcion_grado = OpcionGrado::all()->lists('full_name', 'id');
        $nombre_grupo = Grupo::all()->lists('full_name', 'id');
        $route = ['route'=>['publicacion-investigacion.update', $publicacion->id], 'method'=>'PUT'];
        return view('componentes.publicacion_investigacion.editpublicacion', compact('route', 'publicacion', 'nombre_proyecto', 'nombre_profesor', 'nombre_grupo', 'indicador_modulo', 'nombre_opcion_grado'));
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
        if(!$publicacion)
            return redirect()->back();
        $datos = $request->all();
        $valida = \Validator::make($datos, Publicacion::$reglas);
        if($valida->fails())
            return redirect()->back()->withErrors($valida->errors())->withInput();
        $publicacion->fill($datos);
        $publicacion->save();
        return redirect('publicacion-investigacion')->with('message', 'Registro actualizado!');
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

    /**
     * Exportar reporte 
     */
    public function reporte($tipo_publicacion, $tipo_archivo){
        $reporte = new ExportFiles();
        switch ($tipo_publicacion) {
            case 'investigacion':
                $publicaciones = Publicacion::where('tipo_publicacion', 'i')
                ->get();
                break;
            default:
                $publicaciones = Publicacion::where('tipo_publicacion', 'ps')
                ->get();
                break;
        }
        if($tipo_archivo == 'excel')
            $reporte->createExcel($publicaciones, 'Publicaciones', 'E1');
        else
            $reporte->createPdf($publicaciones, 'Publicaciones', 'E1');
    }// final exportar informe

}
