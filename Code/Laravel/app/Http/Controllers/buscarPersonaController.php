<?php

namespace FCS\Http\Controllers;

use FCS\Estudiante;
use FCS\Profesor;
use FCS\Externo;

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

	public function buscarPersonaExterno($palabra){
		$persona = Externo::where('nombre_externo', 'like', '%'.$palabra.'%')
		->where('tipo_externo', 'p')
		->get();
		return response()->json($persona);
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

	public function buscarEntidadExterno($palabra){
		$entidad = Externo::where('nombre_externo', 'like', '%'.$palabra.'%')
		->where('tipo_externo', 'e')
		->get();
		return response()->json($entidad);
	}

}