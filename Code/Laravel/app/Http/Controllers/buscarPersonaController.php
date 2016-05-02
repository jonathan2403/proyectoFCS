<?php

namespace FCS\Http\Controllers;

use FCS\Estudiante;
use FCS\Profesor;

class buscarPersonaController extends Controller{

	public function buscarEstudiante($palabra){
		$estudiantes = Estudiante::where('primer_nombre', 'like', '%'.$palabra.'%')
		->orWhere('segundo_nombre', 'like', '%'.$palabra.'%')
		->orWhere('codigo_estudiante', 'like', '%'.$palabra.'%')
		->orWhere('apellido_paterno', 'like', '%'.$palabra.'%')
		->orWhere('apellido_materno', 'like', '%'.$palabra.'%')
		->get();
		return response()->json($estudiantes);
	}

	public function buscarProfesor($palabra){
		$profesores = Profesor::where('cedula', 'like', '%'.$palabra.'%')
		->orWhere('primer_nombre', 'like', '%'.$palabra.'%')
		->orWhere('segundo_nombre', 'like', '%'.$palabra.'%')
		->orWhere('primer_apellido', 'like', '%'.$palabra.'%')
		->orWhere('segundo_apellido', 'like', '%'.$palabra.'%')
		->get();
		return response()->json($profesores);
	}
}