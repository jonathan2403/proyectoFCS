<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateProyectoRequest;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Proyecto;
use FCS\Estudiante;
use FCS\RedConocimiento;
use FCS\Base\ExportFiles;
use DB, View, Session, Redirect;


class RedConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 17;
      $redes = DB::table('red_conocimiento')
      ->get();
      return view('componentes.red_conocimiento.index', compact('redes', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $indicador_modulo = 17;
      $route = [ 'route' => 'red-conocimiento.store','method'=>'POST' ];
      $nombre_profesor = Profesor::all()->lists('full_name', 'id');
      return view('componentes.red_conocimiento.addred', compact('route', 'nombre_profesor', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, RedConocimiento::$reglas, RedConocimiento::$mensajes);
          if($valida->fails())
            return redirect()->back()->withErrors($valida->errors())->withInput();
        RedConocimiento::create($request->all());
        return redirect('red-conocimiento')->with('message', 'Registro Exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $indicador_modulo = 17;
      $red = RedConocimiento::find($id);
      if(!$red)
        return redirect()->back();
      return view('componentes.red_conocimiento.showRedConocimiento', compact('red', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 17;
        $red_conocimiento = RedConocimiento::find($id);
        if(!$red_conocimiento)
          return redirect()->back();
        $route = ['route' => ['red-conocimiento.update', $red_conocimiento->id], 'method' => 'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        return view('componentes.red_conocimiento.editred', compact('route', 'red_conocimiento', 'nombre_profesor', 'indicador_modulo'));
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
        $red_conocimiento = RedConocimiento::find($id);
        $valida = \Validator::make($datos, RedConocimiento::$reglas, RedConocimiento::$mensajes);
        if($valida->fails())
          return redirect()->back()->withErrors($valida->errors())->withInput();
        $red_conocimiento->fill($datos);
        $red_conocimiento->save();
        return redirect('red-conocimiento')->with('message', 'Registro Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      RedConocimiento::destroy($id);
      Session::flash('message','Registro Eliminado!');
      return Redirect::to('/red-conocimiento');
    }

    /**
     * Exporta reporte
     */
    public function reporte($tipo_archivo){
      $redes = RedConocimiento::all();
      $reporte = new ExportFiles();
      switch($tipo_archivo){
        case 'excel':
        $reporte->createExcel($redes, 'Redes de Conocimiento', 'E1');
        break;
        default:
        $reporte->createPdf($redes, 'Redes de Conocimiento', 'E1');
        break;
      }
    }

}
