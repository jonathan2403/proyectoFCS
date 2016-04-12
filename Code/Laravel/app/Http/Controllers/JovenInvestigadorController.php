<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\JovenInvestigador;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;

class JovenInvestigadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 24;
        $jovenes_investigadores = JovenInvestigador::all();
        //dd($jovenes_investigadores);
        return view('componentes.joven_investigador.index', compact('jovenes_investigadores', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 24;
        $route = ['route' => 'joven-investigador.store', 'method' => 'POST'];
        return view('componentes.joven_investigador.addjoven_investigador', compact('route', 'indicador_modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
        //$indicador_modulo = 24;
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
        //
    }

    /**
     * Buscar Estudiante
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscarPersona()
    {
        
    }
}
