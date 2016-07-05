<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\PlanEstudio;
use FCS\Programa;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests\Evento\CreateRequest;

use DB, View, Session, Redirect;

class PlanEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $plan=PlanEstudio::All();
        return view('componentes.planes_de_estudio.index',compact('plan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $programa = Programa::ListaPrograma();
        $route = [ 'route' => 'planes-estudio.store' ];
        return view('componentes.planes_de_estudio.addplan',compact('programa','route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        PlanEstudio::create($request->all());
        return redirect('planes-estudio')->with('message','Plan de Estudio creado exitosamente');
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
        $programa = Programa::ListaPrograma();
        $plan=PlanEstudio::find($id);
        $route = [ 'route'=>['planes-estudio.update',$plan->id],'method'=>'PUT'];
        return view('componentes.planes_de_estudio.editplan', compact('programa','route','plan'));
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
        $programa = Programa::ListaPrograma();
        $plan=PlanEstudio::find($id);
        $plan->fill($request->all());
        $plan->save();

        Session::flash('message','Plan de Estudio Editado Correctamente');
        return redirect::to('planes-estudio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        PlanEstudio::destroy($id);
        Session::flash('message','Plan de Estudio Eliminado Correctamente');
        return Redirect::to('planes-estudio');
    }
}
