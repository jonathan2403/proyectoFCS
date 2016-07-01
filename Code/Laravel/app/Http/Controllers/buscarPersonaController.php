<?php

namespace FCS\Http\Controllers;

use FCS\Estudiante;
use FCS\Profesor;
use FCS\Externo;

class buscarPersonaController extends Controller{

	public function buscarEstudiante($palabra){
		$estudiantes = Estudiante::select('id', 'codigo_estudiante', 'primer_nombre', 'segundo_nombre', 'codigo_estudiante', 'apellido_paterno', 'apellido_materno')
		->orWhere('codigo_estudiante', 'like', '%'.$palabra.'%')
		->orWhere(\DB::raw("LOWER(CONCAT(primer_nombre, ' ', segundo_nombre, ' ', apellido_paterno, ' ', apellido_materno))"), 'like', '%'.$palabra.'%')
		->get();
		return response()->json($estudiantes);
	}

	public function buscarPersonaExterno($palabra){
		$persona = Externo::where(\DB::raw("LOWER(nombre_externo)"), 'like', '%'.$palabra.'%')
		->where('tipo_externo', 'p')
		->get();
		return response()->json($persona);
	}

	public function buscarProfesor($palabra){
		$profesores = Profesor::select('id', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido')
		->orwhere('cedula', 'like', '%'.$palabra.'%')
		->orWhere(\DB::raw("LOWER(CONCAT(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido))"), 'like', '%'.$palabra.'%')
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