<?php

namespace FCS\Http\Controllers;

use DB, View, Session, Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use FCS\Http\Requests\CreateAdscripcionRequest;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests;
use FCS\Adscripcion;

class AdscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
       $reglas = [
       'id_estudiante' => 'required|exists:estudiantes,id',
       'id_grupo' => 'required|exists:grupo,id'
       ];       
       $this->validate($request, $reglas);
       $participante = Adscripcion::where('id_estudiante', $datos['id_estudiante'])
       ->where('id_grupo', $datos['id_grupo'])
       ->first();
       if($participante)
            return redirect()->back();
       Adscripcion::create($request->all());
       Session::flash('message', 'Registro Exitoso!');
       return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Adscripcion::destroy($id);
        Session::flash('message','Registro Eliminado!');
        return redirect()->back();
    }
}
