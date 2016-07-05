<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\TipoProyecto;
use FCS\Http\Requests;
use Session;
use Redirect;
use FCS\Http\Controllers\Controller;

class TipoProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipo_proyectos=TipoProyecto::All();
      return view('componentes.tipo_proyecto.index',compact('tipo_proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('componentes.tipo_proyecto.addtipoproyecto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      TipoProyecto::create($request->all());
      return redirect('tipo-proyecto')->with('message','Tipo Proyecto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tipo_proyectos=TipoProyecto::find($id);
      $route = [ 'route'=>['tipo-proyecto.update',$tipo_proyectos->id],'method'=>'PUT'];
      return view('componentes.tipo_proyecto.edittipoproyecto',compact('route','tipo_proyectos'));
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
      $tipo_proyectos=TipoProyecto::find($id);
      $tipo_proyectos->fill($request->all());
      $tipo_proyectos->save();

      Session::flash('message','Tipo Proyecto Editado Correctamente');
      return redirect::to('tipo-proyecto');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      TipoProyecto::destroy($id);
      Session::flash('message','Tipo Proyecto Eliminado Correctamente');
      return Redirect::to('/tipo-proyecto');
    }
}
