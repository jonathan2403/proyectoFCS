<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateSustentacionRequest;
use FCS\Http\Controllers\Controller;
use DB, View, Session, Redirect;
use FCS\Requiere;

class RequiereController extends Controller
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
    public function store(Request $request)
    {
      $requiere = new Requiere($request->all());
      $query = DB::table('requiere')
      ->select('id')
      ->where('id_opcion_grado', '=', $requiere->id_opcion_grado)
      ->where('id_proyecto', '=', $requiere->id_proyecto)
      ->get();
      if($query)
      {
        Session::flash('message', 'Estudiante ya está Registrado!');
      }
      else {
        $requiere->save();
        Session::flash('message', 'Estudiante Registrado Correctamente!');
      }
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
      Requiere::destroy($id);
      Session::flash('message','Estudiante Eliminado Correctamente');
      return redirect()->back();
    }
}
