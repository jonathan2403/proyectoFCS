<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Requests\CreatePublicacionRequest;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Proyecto;
use FCS\Grupo;
use FCS\Publicacion;
use DB, View, Session, Redirect;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $publicaciones=\DB::table('publicacion')
         ->get ();
       return view('componentes.publicacion.index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route = [ 'route' => 'publicacion.store','method'=>'POST' ];
        $nombre_grupo = Grupo::all()->lists('full_name','id');
         $nombre_profesor = Profesor::all()->lists('full_name','id');
        $nombre_proyecto = Proyecto::all()->lists('full_name','id');
        return view('componentes.publicacion.addpublicacion', compact('route','nombre_proyecto','nombre_grupo','nombre_profesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePublicacionRequest $request)
    {
        Publicacion::create($request->all());
         return redirect('publicacion')-> with('message','Registro Exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $publicaciones = \DB::table('publicacion')
        ->join('grupo', 'publicacion.id_grupo', '=', 'grupo.id')
        ->where('publicacion.id', $id)
        ->select('publicacion.id',  'publicacion.descripcion', 'grupo.sigla')
        ->get();
      $proyecto = \DB::table('publicacion')
        ->join('proyecto', 'publicacion.id_proyecto', '=', 'proyecto.id')
        ->where('publicacion.id', $id)
        ->select('proyecto.titulo_proyecto')
        ->get();
      $opcion_grado = \DB::table('publicacion')
        ->join('opcion_grado', 'publicacion.id_opcion_grado', '=', 'opcion_grado.id')
        ->where('publicacion.id', $id)
        ->select('opcion_grado.descripcion')
        ->get();
        return view('componentes.publicacion.showPublicacion', compact('publicaciones', 'proyecto', 'opcion_grado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion=Publicacion::find($id);
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $nombre_proyecto = Proyecto::all()->lists('full_name', 'id');
        $nombre_grupo = Grupo::all()->lists('full_name', 'id');
        $route = [ 'route'=>['publicacion.update',$publicacion->id],'method'=>'PUT'];
        return view('componentes.publicacion.editpublicacion', compact('route', 'publicacion', 'nombre_proyecto', 'nombre_profesor', 'nombre_grupo'));
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
        $publicacion=Publicacion::find($id);
        $publicacion->fill($request->all());
        $publicacion->save();
        Session::flash('message','Registro Actualizado!');
        return redirect::to('publicacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publicacion::destroy($id);
        Session::flash('message','Publicacion Eliminada Correctamente');
        return Redirect::to('/publicacion');
    }
}
