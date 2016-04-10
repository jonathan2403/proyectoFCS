<?php
namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Curso;
use FCS\PlanEstudio;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Http\Requests\Evento\CreateRequest;

use DB, View, Session, Redirect;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cursos=Curso::All();
        return view('componentes.cursos.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $planes = PlanEstudio::ListaPlanes();
        $route = [ 'route' => 'cursos.store' ];
        return view('componentes.cursos.addcurso',compact('planes','route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Curso::create($request->all());
        return redirect('cursos')->with('message','Cursoo creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $planes = PlanEstudio::ListaPlanes();
        $cursos=Curso::find($id);
        $route = [ 'route'=>['cursos.update',$cursos->id],'method'=>'PUT'];
        return view('componentes.cursos.editcurso', compact('planes','route','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $planes = PlanEstudio::ListaPlanes();
        $cursos=Curso::find($id);
        $cursos->fill($request->all());
        $cursos->save();

        Session::flash('message','Curso Editado Correctamente');
        return redirect::to('cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        Session::flash('message','Curso Eliminado Correctamente');
        return Redirect::to('/cursos');
    }
}
