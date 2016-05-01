<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class JovenInvestigador extends Model
{
    protected $table = 'joven_investigador';
    protected $fillable = ['id_estudiante', 'id_grupo'];

    public static $reglas_crear = array(
    	'id_estudiante' => 'required|exists:estudiantes,id',
    	'id_grupo' => 'required|exists:grupo,id'
    	);

    public static $mensajes = array(
    	'id_estudiante.required' => 'El campo estudiante es obligatorio.',
    	'id_grupo.required' => 'El campo grupo es obligatorio'
    	);
}
