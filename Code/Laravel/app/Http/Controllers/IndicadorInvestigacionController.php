<?php
namespace FCS\Http\Controllers;
use FCS\Http\Controllers\Controller;
use FCS\Grupo;

class IndicadorInvestigacionController extends Controller
 {
 	public function index()
 	  {
      $indicador_modulo = 13;
 	  	$grupos = \DB::table('grupo')->count();
        $proyectos = \DB::table('proyecto')->count();
        $publicaciones = \DB::table('publicacion')->count();
        $opciones_grado = \DB::table('opcion_grado')->count();
        return view('componentes.indicadores-investigacion.index', compact('grupos', 'proyectos', 'publicaciones', 'opciones_grado', 'indicador_modulo'));
 	  }
 	public function show($indicador)
      {
        if($indicador != 'grupos' && $indicador != 'proyectos')
          return redirect()->back();
        $indicador_modulo = 13;
        switch($indicador){
          case 'grupos':
            $estudio = Grupo::where('tipo', '=', 'e')->count();
            $investigacion = Grupo::where('tipo', '=', 'i')->count();
            $total = Grupo::all()->count();
            break;

          case 'proyectos':
            $estudio = Grupo::where('tipo', '=', 'e')->count();
            $investigacion = Grupo::where('tipo', '=', 'i')->count();
            $total = Grupo::all()->count();
            break;

        }
      	return view('componentes.indicadores-investigacion.show.'.$indicador, compact('estudio', 'investigacion', 'total', 'indicador_modulo')); 
      }
 }