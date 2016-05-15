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

    public static $reglas = array(
      'sigla' => 'max:50',
      'descripcion' => 'required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\-! ,\'\"\/@\.:\(\)]+$/',
      'tipo' => 'required|in:i,e,ps',
      'categoria' => 'required|in:a,b,c,d',
      'id_profesor' => 'required|exists:profesores,id'
      );

    public static $mensajes = array(
      'id_profesor.required' => 'El campo coordinador es obligatorio.'
      );
}
