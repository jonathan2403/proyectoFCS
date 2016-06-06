<?php
namespace FCS\Http\Controllers;
use FCS\Http\Controllers\Controller;
use FCS\Grupo;
use FCS\OpcionGrado;

class IndicadorProyeccionController extends Controller
 {
 	public function index()
 	  {
      $indicador_modulo = 25;
 	  	  $grupos = Grupo::where('tipo', 'ps')->count();
        $proyectos = \DB::table('proyecto')->count();
        $publicaciones = \DB::table('publicacion')->count();
        $opciones_grado = OpcionGrado::whereIn('tipo_opcion_grado', ['epps', 'pas', 'pos'])
        ->count();
        return view('componentes.indicadores.proyeccion.index', compact('grupos', 'proyectos', 'publicaciones', 'opciones_grado', 'indicador_modulo'));
 	  }
 	public function show($indicador)
      {
        $indicador_modulo = 25;
      	return view('componentes.indicadores.proyeccion.show.'.$indicador, compact('indicador_modulo')); 
      } // final func show

    /**
     * Consulta datos para graficar opciones de grado
     */
    public function consultaOpcionGrado(){
        $epps = OpcionGrado::where('tipo_opcion_grado', 'epps')->count();
        $pas = OpcionGrado::where('tipo_opcion_grado', 'pas')->count();
        $pos = OpcionGrado::where('tipo_opcion_grado', 'pos')->count();
        $opciones_grado_porcentajes = [
        'epps' => $epps, 
        'pas' => $pas, 
        'pos' => $pos];
        return  $opciones_grado_porcentajes;
    }

 }