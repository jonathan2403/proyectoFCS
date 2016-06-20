<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    protected $fillable=['cedula','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','email', 'telefono'];

    public function getFullNameAttribute()
    {
    	$name = $this->cedula.' - '.$this->primer_nombre.' '.$this->segundo_nombre.' '.$this->primer_apellido.' '.$this->segundo_apellido;
      return ucwords($name);
    }

    public function getNombreAttribute()
    {
      $name = $this->primer_nombre.' '.$this->segundo_nombre.' '.$this->primer_apellido.' '.$this->segundo_apellido;
      return ucwords($name);
    }

}
