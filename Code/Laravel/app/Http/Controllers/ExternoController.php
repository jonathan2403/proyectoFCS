<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;

use FCS\Profesor;
use FCS\Entidad;
use Session, Redirect;

class ExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 16;
        $entidades = Entidad::where('tipo_entidad','e')
        ->get();
        $personas = Entidad::where('tipo_entidad','p')
        ->get();
        return view('componentes.externo.index', compact('entidades', 'personas', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 16;
        $route = ['route' => 'externo.store','method'=>'POST'];
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        return view('componentes.externo.addexterno', compact('route', 'nombre_profesor', 'indicador_modulo'));
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
      $valida = \Validator::make($datos, Entidad::$reglas_crear);
      if($valida->fails()){
        return redirect()->back()->withErrors($valida->errors())->withInput($datos);
      }else{
            Entidad::create($datos);
      }
      return redirect('externo')->with('message','Registro Creado!');
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
        $indicador_modulo = 16;
        $externo = Entidad::find($id);
        $route = ['route'=>['externo.update', $externo->id], 'method'=>'PUT'];
        return view('componentes.externo.editexterno', compact('externo', 'route', 'indicador_modulo'));
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
        $externo  = Entidad::find($id);
        $externo->fill($request->all());
        $externo->save();
        Session::flash('message', 'Registro Actualizado!');
        return redirect::to('externo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Entidad::destroy($id);
      Session::flash('message','Registro Eliminado!');
      return Redirect::to('/externo');
    }
}
