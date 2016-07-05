<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Programa;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests\Programa\CreateRequest;

use DB, View, Session, Redirect;

class ProgramaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $programa=Programa::All();
        return view('componentes.programa.index',compact('programa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $route = [ 'route' => 'programa.store','method'=>'POST' ];
        return view('componentes.programa.addprograma',compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateRequest $request)
    {
        Programa::create($request->all());
        return redirect('programa')->with('message','Programa creado exitosamente');
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
        $programa=Programa::find($id);
        $route = [ 'route'=>['programa.update',$programa->id],'method'=>'PUT'];
        return view('componentes.programa.editprograma', compact('route','programa'));
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
        $programa=Programa::find($id);
        $programa->fill($request->all());
        $programa->save();

        Session::flash('message','Programa Editado Correctamente');
        return redirect::to('programa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Programa::destroy($id);
        Session::flash('message','Programa Eliminado Correctamente');
        return Redirect::to('/programa');
    }
}
