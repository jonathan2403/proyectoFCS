<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Vinculacion;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests\Evento\CreateRequest;

use DB, View, Session, Redirect;

class VinculacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $vinculacion=Vinculacion::All();
        return view('componentes.vinculacion.index',compact('vinculacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $route = [ 'route' => 'vinculacion.store','method'=>'POST' ];
        return view('componentes.vinculacion.addvinculacion',compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Vinculacion::create($request->all());
        return redirect('vinculacion')->with('message','Tipo de Vinculacion creado exitosamente');
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
        $vinculacion=Vinculacion::find($id);
        $route = [ 'route'=>['vinculacion.update',$vinculacion->id],'method'=>'PUT'];
        return view('componentes.vinculacion.editvinculacion', compact('route','vinculacion'));
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
        $vinculacion=Vinculacion::find($id);
        $vinculacion->fill($request->all());
        $vinculacion->save();

        Session::flash('message','Tipo Vinculacion Editado Correctamente');
        return redirect::to('vinculacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Vinculacion::destroy($id);
        Session::flash('message','Vinculacion Eliminado Correctamente');
        return Redirect::to('/vinculacion');
    }
}
