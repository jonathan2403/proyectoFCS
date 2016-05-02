<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Externo extends Model
{
  protected $table = 'externo';
  protected $fillable = ['nombre_externo', 'tipo_externo', 'telefono', 'correo', 'direccion','area_conocimiento', 'nivel_estudio', 'experiencia'];

  public function getFullNameEntidadAttribute()
  {
     if($this->attributes['tipo_externo'] == "e")
     return ucwords($this->nombre_entidad);
  }
  public function getFullNamePersonaAttribute()
  {
     if($this->attributes['tipo_externo'] == "p")
     return ucwords($this->nombre_entidad);
  }
  public function getNombreEtindadAttribute($value)
    {
      return ucfirst($value);
    }

  public static $reglas_crear = array(
    'nombre_externo' => 'required',
    'tipo_externo' => 'required',
    'telefono' => 'required'
    );
}
