<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Evento;
use FCS\TipoEvento;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests\CreateEventoRequest;
use FCS\Profesor;
use FCS\Estudiante;
use FCS\Base\ExportFiles;
use FCS\Asistencia;

use DB, View, Session, Redirect;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indicador_modulo = 10;
        $eventos=Evento::All();
        return view('componentes.eventos.index',compact('eventos', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $indicador_modulo = 10;
        $tipo_evento = TipoEvento::allLists();
        $route = [ 'route' => 'evento.store', 'method' => 'POST' ];
        return view('componentes.eventos.addevento',compact('tipo_evento','route', 'indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateEventoRequest $request)
    {
        Evento::create($request->all());
        return redirect('evento')->with('message','Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $indicador_modulo = 10;
        $eventos = \DB::table('eventos')
        ->where('id', $id)
        ->get();
        if(!$eventos)
            return redirect()->back();
        $profesores = Asistencia::join('profesores', 'asistencia.id_profesor', '=', 'profesores.id')
        ->join('eventos', 'asistencia.id_evento', '=', 'eventos.id')
        ->select('asistencia.id', 'profesores.cedula', 'profesores.email','profesores.telefono', DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
        ->where('eventos.id', $id)
        ->get();
        $estudiantes = Asistencia::join('estudiantes', 'asistencia.id_estudiante', '=', 'estudiantes.id')
        ->join('eventos', 'asistencia.id_evento', '=', 'eventos.id')
        ->select('asistencia.id', 'estudiantes.telefono', 'estudiantes.numero_documento', 'estudiantes.email', DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.segundo_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS full_name"))
        ->where('eventos.id', $id)
        ->get();
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $nombre_estudiante = Estudiante::all()->lists('full_name', 'id');
        
        return view('componentes.eventos.showevento', compact('eventos', 'profesores', 'nombre_profesor', 'estudiantes', 'nombre_estudiante', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $indicador_modulo = 10;
        $tipo_evento = TipoEvento::allLists();
        $eventos = Evento::find($id);
        if(!$eventos)
            return redirect()->back();
        $route = [ 'route'=>['evento.update',$eventos->id],'method'=>'PUT'];
        return view('componentes.eventos.editevento', compact('tipo_evento','route','eventos', 'indicador_modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $tipo_eventos=TipoEvento::allLists();
        $eventos=Evento::find($id);
        $eventos->fill($request->all());
        $eventos->save();

        Session::flash('message','Registro Actualizado!');
        return redirect::to('evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Evento::destroy($id);
        Session::flash('message','Registro Eliminado!');
        return Redirect::to('/evento');
    }

    /**
     * Genera reporte
     */
    public function reporte($tipo_archivo){
        $eventos=Evento::All();
        $reporte = new ExportFiles();
        switch($tipo_archivo){
            case 'excel':
            $reporte->createExcel($eventos, 'Eventos', 'E1');
            break;
            default:
            $reporte->createPdf($eventos, 'Eventos', 'E1');
            break;
        }
    }
}
