<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\NivelEstudio;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests\Evento\CreateRequest;

use DB, View, Session, Redirect;

class NivelEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $nestudio=NivelEstudio::All();
        return view('componentes.nivel_estudio.index',compact('nestudio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $route = [ 'route' => 'nivel-estudio.store','method'=>'POST' ];
        return view('componentes.nivel_estudio.addnivelestudio',compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        NivelEstudio::create($request->all());
        return redirect('nivel-estudio')->with('message','Nivel de Estudio creado exitosamente');
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
        $nestudio=NivelEstudio::find($id);
        $route = [ 'route'=>['nivel-estudio.update',$nestudio->id],'method'=>'PUT'];
        return view('componentes.nivel_estudio.editnivelestudio', compact('route','nestudio'));
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
        $nestudio=NivelEstudio::find($id);
        $nestudio->fill($request->all());
        $nestudio->save();

        Session::flash('message','Nivel de Estudio Editado Correctamente');
        return redirect::to('nivel-estudio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        NivelEstudio::destroy($id);
        Session::flash('message','Nivel de Estudio Eliminado Correctamente');
        return Redirect::to('nivel-estudio');
    }
}
