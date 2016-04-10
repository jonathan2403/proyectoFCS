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
      $redes = DB::table('red_conocimiento')
      ->get();
      return view('componentes.red_conocimiento.index', compact('redes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $route = [ 'route' => 'red-conocimiento.store','method'=>'POST' ];
      $nombre_profesor = Profesor::all()->lists('full_name', 'id');
      return view('componentes.red_conocimiento.addred', compact('route', 'nombre_profesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
      $redes = DB::table('red_conocimiento')
      ->where('id', $id)
      ->get();
      $responsable = \DB::table('red_conocimiento')->join('profesores', 'red_conocimiento.id_responsable', '=', 'profesores.id')
      ->select(DB::raw("CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS full_name"))
      ->get();
      //dd($responsable);
      return view('componentes.red_conocimiento.showRedConocimiento', compact('redes', 'responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $red_conocimiento = RedConocimiento::find($id);
        $route = ['route' => ['red-conocimiento.update', $red_conocimiento->id], 'method' => 'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        return view('componentes.red_conocimiento.editred', compact('route', 'red_conocimiento', 'nombre_profesor'));
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
        $red_conocimiento = RedConocimiento::find($id);
        $red_conocimiento->fill($request->all());
        $red_conocimiento->save();
        Session::flash('message','Registro Actualizado!');
        return redirect::to('red-conocimiento');
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
}
