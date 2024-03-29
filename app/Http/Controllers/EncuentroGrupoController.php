<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests\EncuentroGrupoRequests;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\EncuentroGrupo;
use FCS\Profesor;
use FCS\Departamento;
use FCS\Municipio;
use FCS\Base\ExportFiles;
use Session, Redirect;


class EncuentroGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicador_modulo = 21;
        $encuentros = EncuentroGrupo::all();
        return view('componentes.encuentro_grupo.index', compact('encuentros', 'indicador_modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador_modulo = 21;
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        $departamentos = Departamento::all()->lists('nombre', 'departamento');
        return view('componentes.encuentro_grupo.addencuentro_grupo', compact('nombre_profesor', 'departamentos', 'indicador_modulo'));
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
        $this->validate($request, EncuentroGrupo::$reglas, EncuentroGrupo::$mensajes);
        EncuentroGrupo::create($datos);
        return redirect('encuentro-grupo')->with('message', 'Registro creado!');
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
        $indicador_modulo = 21;
        $encuentro = EncuentroGrupo::find($id);
        $departamentos = Departamento::all()->lists('nombre', 'departamento');
        $municipios = Municipio::all()->lists('nombre', 'municipio');
        if(!$encuentro)
            return redirect()->back();
        $route = ['route'=>['encuentro-grupo.update', $encuentro->id], 'method'=>'PUT'];
        return view('componentes.encuentro_grupo.editencuentro_grupo', compact('encuentro', 'route', 'departamentos', 'municipios', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, EncuentroGrupo::$reglas, EncuentroGrupo::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }
        $encuentro = EncuentroGrupo::find($id);
        $encuentro->fill($datos);
        $encuentro->save();
        return redirect()->to('encuentro-grupo')->with('message', 'Registro Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EncuentroGrupo::destroy($id);
        Session::flash('message', 'Registro Eliminado!');
        return Redirect::to('encuentro-grupo');
    }


    /**
     * Genera Informes [pdf, excel]
     */
    public function reporte($tipo_archivo){
        $encuentros = EncuentroGrupo::join('profesores','encuentros_grupos.id_profesor', '=', 'profesores.id')
        ->select('encuentros_grupos.nombre_encuentro AS Título', 'encuentros_grupos.fecha_realizacion AS Fecha', \DB::raw("CASE WHEN encuentros_grupos.tipo_grupo = 'i' THEN 'investigación' ELSE 'proyección social' END AS Grupo"), 'encuentros_grupos.modalidad AS Modalidad', 'encuentros_grupos.lugar AS Lugar', \DB::raw("CONCAT(profesores.primer_nombre,' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS Ponente"))
        ->orderBy('encuentros_grupos.nombre_encuentro', 'ASC')
        ->get();   
        switch ($tipo_archivo) {
             case 'excel':
                 $exportExcel = new ExportFiles();
                 $exportExcel->createExcel($encuentros, 'Encuentro de Grupos', 'F1');
                 break;
             default:
                 $exportPdf = new ExportFiles();
                 $exportPdf->createPdf($encuentros, 'Encuentro de Grupos', 'F1');
                 break;
         } 
    }

}
