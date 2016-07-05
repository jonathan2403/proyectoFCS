<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\TipoEvento;
use FCS\Http\Requests;
use Session;
use Redirect;
use FCS\Http\Controllers\Controller;

class TipoEventoController extends Controller
{

    /**
     * consulta datos
     */
    public function consultar(){
        $tipo_eventos = TipoEvento::all();
        return response()->json($tipo_eventos->toArray());
    }

    /**
     * 
     */
    public function crear(Request $request){
        $dato = $request->input('nombre_tipoevento');
        $tipo_evento = new TipoEvento();
        $tipo_evento->nombre_tipoevento = $dato;
        $tipo_evento->save();
        return response()->json($tipo_evento);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indicador_modulo = 2;
        $tipo_eventos=TipoEvento::all();
        //return response()->json($tipo_eventos->toArray());
        return view('componentes.tipo_evento.index',compact('tipo_eventos', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $indicador_modulo = 2;
        return view('componentes.tipo_evento.addtipoevento', compact('indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $valida = \Validator::make($datos, TipoEvento::$reglas, TipoEvento::$mensajes);
        if($valida->fails())
            return response()->json([
                //'errores' => $valida->errors()->toArray(),
                'errores' => $valida->errors(),
                'error' => true
                ]);
        $tipo_evento = TipoEvento::create($datos);    
        return response()->json($tipo_evento);
        //return redirect('tipo-evento')->with('message', 'Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tipo_evento = TipoEvento::find($id);
        return response()->json($tipo_evento);
        /*$indicador_modulo = 2;
        $tipo_eventos=TipoEvento::find($id);
        $route = [ 'route'=>['tipo-evento.update',$tipo_eventos->id],'method'=>'PUT'];
        return view('componentes.tipo_evento.edittipoevento',compact('route','tipo_eventos', 'indicador_modulo'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $datos = array(
            'id' => $request->input('id'),
            'nombre_tipoevento' => $request->input('nombre_tipoevento')
            );
        $tipo_evento = TipoEvento::find($datos['id']);
        $tipo_evento->nombre_tipoevento = $datos['nombre_tipoevento'];
        $tipo_evento->save();
        return response()->json($tipo_evento);
        /*$tipo_eventos=TipoEvento::find($id);
        $tipo_eventos->fill($request->all());
        $tipo_eventos->save();
        Session::flash('message','Tipo Evento Editado Correctamente');
        return redirect::to('tipo-evento');*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $tipo_evento = TipoEvento::destroy($id);
        if($tipo_evento){
            return response()->json([
            'mensaje' => 'OK',
            'error' => false
            ]);
        }
    }
}
