<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = ['numero_documento', 'codigo_estudiante', 'telefono', 'primer_nombre', 'segundo_nombre', 'apellido_paterno', 'apellido_materno', 'email'];
    public function getFullNameAttribute()
      {
      	$name = $this->codigo_estudiante.' - '.$this->primer_nombre.' '.$this->segundo_nombre.' '.$this->apellido_paterno.' '.$this->apellido_materno;
      	return ucwords($name);
      }    
}
