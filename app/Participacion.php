<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    protected $table = 'participacion';
    protected $fillable = ['id_profesor', 'id_proyecto', 'id_estudiante','id_educacion_continua'];

    public function setIdProfesorAttribute($value){
           $this->attributes['id_profesor'] = empty($value) ? null : $value;
     }
    public function setIdEstudianteAttribute($value){
           $this->attributes['id_estudiante'] = empty($value) ? null : $value;
     }
    public function setIdEducacionContinuaAttribute($value){
           $this->attributes['id_educacion_continua'] = empty($value) ? null : $value;     
     }    
    
}
