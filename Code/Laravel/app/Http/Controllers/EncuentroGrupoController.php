<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests\EncuentroGrupoRequests;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\EncuentroGrupo;
use FCS\Profesor;


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
        $encuentros = EncuentroGrupo::join('profesores','encuentros_grupos.id_profesor', '=', 'profesores.id')
        ->select('encuentros_grupos.id', 'encuentros_grupos.nombre_encuentro', 'encuentros_grupos.fecha_realizacion', 'encuentros_grupos.tipo_grupo', 'encuentros_grupos.modalidad', 'encuentros_grupos.lugar', \DB::raw("CONCAT(profesores.primer_nombre,' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS ponente"))
        ->get();
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
        return view('componentes.encuentro_grupo.addencuentro_grupo', compact('nombre_profesor', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, EncuentroGrupo::$reglas_crear, EncuentroGrupo::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }
        else{
            EncuentroGrupo::create($datos);
        }
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
        $indicador_modulo = 21;
        $encuentro = EncuentroGrupo::find($id);
        $route = ['route'=>['encuentro-grupo.update', $encuentro->id], 'method'=>'PUT'];
        $nombre_profesor = Profesor::all()->lists('full_name', 'id');
        return view('componentes.encuentro_grupo.editencuentro_grupo', compact('encuentro', 'route', 'nombre_profesor', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, EncuentroGrupo::$reglas_editar, EncuentroGrupo::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }else{
            $encuentro = EncuentroGrupo::find($id);
            $encuentro->fill($datos);
            $encuentro->save();
        }
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
        //
    }

    /**
     * Descargar Excel
     */
    public function excel(){
    $encuentros = EncuentroGrupo::join('profesores','encuentros_grupos.id_profesor', '=', 'profesores.id')
        ->select('encuentros_grupos.nombre_encuentro AS Título', 'encuentros_grupos.fecha_realizacion AS Fecha', 'encuentros_grupos.tipo_grupo AS Grupo', 'encuentros_grupos.modalidad AS Modalidad', 'encuentros_grupos.lugar AS Lugar', \DB::raw("CONCAT(profesores.primer_nombre,' ', profesores.segundo_nombre, ' ', profesores.primer_apellido, ' ', profesores.segundo_apellido) AS Ponente"))
        ->orderBy('encuentros_grupos.nombre_encuentro', 'ASC')
        ->get();
    \Excel::create('Encuentro de Grupos', function($excel) use($encuentros){
        $excel->sheet('datosIndex', function($sheet) use($encuentros){
            $sheet->fromModel($encuentros);
            $sheet->setAutoSize(true);
            $sheet->cell('A1:F1', function($cells){
                $cells->setFont([
                    'family' => 'Comic Sans MS',
                    'size' => '13',
                    'bold' => true,
                    ]);
                $cells->setAlignment('center');
            });
        });
    })->export('xls');
    }

}
