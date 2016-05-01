<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\JovenInvestigador;
use FCS\Estudiante;
use FCS\Grupo;
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
        $jovenes_investigadores = JovenInvestigador::join('estudiantes', 'joven_investigador.id_estudiante', '=', 'estudiantes.id')
        ->join('grupo', 'joven_investigador.id_grupo', '=', 'grupo.id')
        ->select('joven_investigador.id', \DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS nombre_estudiante"), \DB::raw("CONCAT(grupo.sigla, ' - ', grupo.descripcion) AS nombre_grupo"))
        ->get();
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
        $grupos = Grupo::all()->lists('NombreGrupo', 'id');
        $route = ['route' => 'joven-investigador.store', 'method' => 'POST']; 
        return view('componentes.joven_investigador.addjoven_investigador', compact('route', 'grupos', 'indicador_modulo'));
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
        $valida = \Validator::make($datos, JovenInvestigador::$reglas_crear, JovenInvestigador::$mensajes);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }else{
            $joven_investigador = JovenInvestigador::create($datos);
        }
        return redirect('joven-investigador')->with('message', 'Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador_modulo = 24;
        $joven_investigador = JovenInvestigador::find($id);
        $nombre_estudiante = JovenInvestigador::join('estudiantes', 'joven_investigador.id_estudiante', '=', 'estudiantes.id')
        ->select(\DB::raw("CONCAT(estudiantes.primer_nombre, ' ', estudiantes.segundo_nombre, ' ', estudiantes.apellido_paterno, ' ', estudiantes.apellido_materno) AS nombre_estudiante"))
        ->where('joven_investigador.id', $id)
        ->first();
        $nombre_estudiante = $nombre_estudiante['nombre_estudiante'];
        $grupos = Grupo::all()->lists('NombreGrupo', 'id');
        $route = ['route' => ['joven-investigador.update', $joven_investigador->id], 'method' => 'PUT'];
        return view('componentes.joven_investigador.editjoven_investigador', compact('route', 'nombre_estudiante', 'joven_investigador', 'grupos'));
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
        $joven_investigador = JovenInvestigador::find($id);
        $joven_investigador->fill($request->all());
        $joven_investigador->save();
        return redirect('joven-investigador')->with('message', 'Registro Actualizado!');
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
    public function buscarPersona($persona)
    {
        dd($persona);
        $usuarios = array();
        $usuarios = Estudiante::all();
        return \Response::json($usuarios);
    }
}
