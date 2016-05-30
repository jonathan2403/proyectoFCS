<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreateAsistenciaRequest;
use FCS\Http\Controllers\Controller;
use DB, View, Session, Redirect;
use FCS\Asistencia;
use FCS\Evento;

class AsistenciaController extends Controller
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
        $evento = Evento::find($request->input('id_evento'));
        if(!$evento)
            return redirect()->back();
        switch($request->input('tipo_participante')){
            case 'es':
            Asistencia::create([
                'id_evento' => $request->input('id_evento'),
                'id_estudiante' => $request->input('id_estudiante')
                ]);
            break;
            case 'p':
            Asistencia::create([
                'id_evento' => $request->input('id_evento'),
                'id_profesor' => $request->input('id_profesor')
                ]);
            break;
            default:
            Asistencia::create([
                'id_evento' => $request->input('id_evento'),
                'id_externo' => $request->input('id_externo')
                ]);
            break;
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
        Asistencia::destroy($id);
        Session::flash('message','Registro Eliminado!');
        return redirect()->back();
    }
}
