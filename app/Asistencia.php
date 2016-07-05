<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencia';
    protected $fillable = ['id_profesor', 'id_evento', 'id_estudiante', 'id_externo'];
    
    public static $reglas = array(
    	'id_profesor' => 'exists:profesores,id',
    	'id_evento' => 'required|exists:eventos,id',
    	'id_estudiante' => 'exists:estudiantes,id',
    	'id_externo' => 'exists:externo,id'
    	);

    public function setIdProfesorAttribute($value){
           $this->attributes['id_profesor'] = empty($value) ? null : $value;
     }

    public function setIdEstudianteAttribute($value){
           $this->attributes['id_estudiante'] = empty($value) ? null : $value;
     }

    public function setIdExternoAttribute($value){
           $this->attributes['id_externo'] = empty($value) ? null : $value;
     }
}
