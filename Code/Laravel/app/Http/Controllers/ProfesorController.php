<?php
namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Profesor;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests\Evento\CreateRequest;

use DB, View, Session, Redirect;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $profesores=Profesor::All();
        return view('componentes.profesores.index',compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $route = [ 'route' => 'profesores.store','method'=>'POST' ];
        return view('componentes.profesores.addprofesor',compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Profesor::create($request->all());
        return redirect('profesores')->with('message','Profesor creado exitosamente');
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
        $profesores=Profesor::find($id);
        $route = [ 'route'=>['profesores.update',$profesores->id],'method'=>'PUT'];
        return view('componentes.profesores.editprofesor', compact('route','profesores'));
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
        $profesores=Profesor::find($id);
        $profesores->fill($request->all());
        $profesores->save();

        Session::flash('message','Profesor Editado Correctamente');
        return redirect::to('profesores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Profesor::destroy($id);
        Session::flash('message','Profesor Eliminado Correctamente');
        return Redirect::to('profesores');
    }
}
