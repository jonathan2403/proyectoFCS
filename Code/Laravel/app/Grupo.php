<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo';
    protected $fillable = ['sigla', 'descripcion', 'tipo', 'id_profesor', 'categoria'];

    public function getNombreGrupoAttribute()
    {
      $name = $this->sigla.' - '.$this->descripcion;
      return ucwords($name);
    }
    public function getSiglaAttribute($value)
    {
      return ucwords($value);
    }

    public static $reglas_crear = array(
      'descripcion' => 'required',
      'id_profesor' => 'required'
      );

    public static $mensajes = array(
      'id_profesor.required' => 'El campo coordinador es obligatorio.'
      );
}
