<?php
namespace FCS\Http\Controllers;
use FCS\Http\Controllers\Controller;
use FCS\Grupo;

class IndicadorInvestigacionController extends Controller
 {
 	public function index()
 	  {
 	  	$grupos = \DB::table('grupo')->count();
        $proyectos = \DB::table('proyecto')->count();
        $publicaciones = \DB::table('publicacion')->count();
        $opciones_grado = \DB::table('opcion_grado')->count();
        return view('componentes.indicadores-investigacion.index', compact('grupos', 'proyectos', 'publicaciones', 'opciones_grado'));
 	  }
 	public function show($name)
      {
      	if($name == 'grupos')
      	{
      	   $estudio = Grupo::where('tipo', '=', 'e')->count();
      	   $investigacion = Grupo::where('tipo', '=', 'i')->count();
      	   $total = Grupo::all()->count();
      	   //dd($total);
      	   return view('componentes.indicadores-investigacion.show.grupos', compact('estudio', 'investigacion', 'total'));	
      	}
      	if($name == 'proyectos')
      	{
      	   $estudio = Grupo::where('tipo', '=', 'e')->count();
      	   $investigacion = Grupo::where('tipo', '=', 'i')->count();
      	   $total = Grupo::all()->count();
      	   //dd($total);
      	   return view('componentes.indicadores-investigacion.show.proyectos', compact('estudio', 'investigacion', 'total'));	
      	}
      	//dd($name);
        //return view('componentes.indicadores-investigacion.show.'.$name);
      }
 }