<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Participacion;
use DB, View, Session, Redirect;

class ParticipacionController extends Controller
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
        //Participacion::create($request->all());
        //$participacion(= new Participacion;
        //dd($request->all());
        $tipo = $request->input('tipo');
        $participacion = $request->input('participacion');
        if($participacion == 'ec')
           {
             if($tipo == "e")
           {
            Participacion::create(['id_educacion_continua' => $request->input('id_educacion_continua'), 'id_estudiante' => $request->input('id_participante')]);
           }
           else
            {
                Participacion::create(['id_educacion_continua' => $request->input('id_educacion_continua'), 'id_profesor' => $request->input('id_participante')]);
            }
           }
           if($participacion == "p")
           {
            if($tipo == "e")
           {
            Participacion::create(['id_proyecto' => $request->input('id_proyecto'), 'id_estudiante' => $request->input('id_participante')]);
           }
           else
            {
                Participacion::create(['id_proyecto' => $request->input('id_proyecto'), 'id_profesor' => $request->input('id_participante')]);
            }
           }
        
        //dd($tipo);
        /*if($request->ajax())
        {
            Participacion::create($request->all());
            return response()->json([
                "mensaje" => "creado"
                ]);
        }
        else
        {
            //dd($request->all());
            Participacion::create($request->all());
        }
        /*else{
                Participacion::create($request->all());
                return redirect()->back();
                Session::flash('message', 'Registro Exitoso!');
        }*/
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
        Participacion::destroy($id);
        Session::flash('message','Registro Eliminado');
        return redirect()->back();
    }
}
