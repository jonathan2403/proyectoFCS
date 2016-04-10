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

$publicaciones = \DB::table('publicacion')
        ->join('grupo', 'publicacion.id_grupo', '=', 'grupo.id')
        ->where('publicacion.id', $id)
        ->select('publicacion.id',  'publicacion.descripcion', 'grupo.sigla')
        ->get();
    //$jovenes=JovenInvestigador::All();
    dd('publicaciones');
        //return view('componentes.joven_investigador.index',compact('jovenes'));
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
        //
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
        //
    }
}
