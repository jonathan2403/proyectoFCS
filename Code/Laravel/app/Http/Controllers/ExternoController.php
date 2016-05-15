<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;

use FCS\Profesor;
use FCS\Externo;
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
        $entidades = Externo::where('tipo_externo','e')
        ->paginate(10);
        $personas = Externo::where('tipo_externo','p')
        ->paginate(10);
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
      $valida = \Validator::make($datos, Externo::$reglas);
      if($valida->fails()){
        return redirect()->back()->withErrors($valida->errors())->withInput($datos);
      }else{
            Externo::create($datos);
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
        return redirect()->back();
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
        $externo = Externo::find($id);
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
        $datos = $request->all();
        $valida = \Validator::make($datos, Externo::$reglas);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }else{
            $externo  = Externo::find($id);
            $externo->fill($datos);
            $externo->save();
        }
        return redirect('externo')->with('message','Registro Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Externo::destroy($id);
      Session::flash('message','Registro Eliminado!');
      return Redirect::to('/externo');
    }
}
