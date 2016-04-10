<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Publica extends Model
{
    protected $table = 'publica';
    protected $fillable = ['id_estudiante', 'id_profesor', 'id_publicacion'];

    public function setIdEstudianteAttribute($value){
           $this->attributes['id_estudiante'] = empty($value) ? null : $value;
     }
     public function setIdProfesorAttribute($value){
           $this->attributes['id_profesor'] = empty($value) ? null : $value;
     }

}
