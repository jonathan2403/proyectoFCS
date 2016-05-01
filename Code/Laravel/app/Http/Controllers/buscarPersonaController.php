<?php

namespace FCS\Http\Controllers;

use FCS\Estudiante;

class buscarPersonaController extends Controller{

	public function buscarEstudiante($palabra){
		$estudiantes = Estudiante::where('primer_nombre', 'like', '%'.$palabra.'%')
		->orWhere('segundo_nombre', 'like', '%'.$palabra.'%')
		->orWhere('codigo_estudiante', 'like', '%'.$palabra.'%')
		->get();
		return response()->json($estudiantes);
	}
}