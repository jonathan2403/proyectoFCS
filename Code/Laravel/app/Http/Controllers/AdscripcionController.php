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
       //dd($request->all());
       Adscripcion::create($request->all());
       Session::flash('message', 'Registro Exitoso!');
       return redirect()->back();
       /*
       //dd($adscripcion);
       $query = DB::table('adscripcion')
       ->select('id')
       ->where('id_grupo', '=', $adscripcion->id_grupo)
       ->where('id_estudiante', '=', $adscripcion->id_estudiante)
       ->get();
       if($query)
       {
         Session::flash('message', 'Estudiante ya está Registrado!');
       }
       else {
         $adscripcion->save();
         Session::flash('message', 'Estudiante Registrado Correctamente!');
       }
       return redirect()->back();*/
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
