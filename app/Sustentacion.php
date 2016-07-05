<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Sustentacion extends Model
{
    protected $table = 'sustentacion';
    protected $fillable = ['id_estudiante', 'id_opcion_grado'];

    // Relación con estudiante
    public function estudiante(){
      return $this->belongsTo('FCS\Estudiante', 'id_estudiante');
    }

    public static $reglas = array(
    	'id_opcion_grado' => 'required|exists:opcion_grado,id',
    	'id_estudiante' => 'required|exists:estudiantes,id'
    	);

}
