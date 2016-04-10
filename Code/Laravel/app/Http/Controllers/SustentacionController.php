<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateSustentacionRequest;
use FCS\Http\Controllers\Controller;
use DB, View, Session, Redirect;
use FCS\Sustentacion;

class SustentacionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSustentacionRequest $request)
    {
       $sustentacion = new Sustentacion($request->all());
       $query = DB::table('sustentacion')
       ->select('id')
       ->where('id_opcion_grado', '=', $sustentacion->id_opcion_grado)
       ->where('id_estudiante', '=', $sustentacion->id_estudiante)
       ->get();
       if($query)
       {
         Session::flash('message', 'Estudiante ya está Registrado!');
       }
       else {
         $sustentacion->save();
         Session::flash('message', 'Estudiante Registrado Correctamente!');
       }
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
        Sustentacion::destroy($id);
        Session::flash('message','Estudiante Eliminado Correctamente');
        return redirect()->back();
    }
}
