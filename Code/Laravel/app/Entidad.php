<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
  protected $table = 'entidad';
  protected $fillable = ['nombre_entidad', 'tipo_entidad', 'telefono', 'correo', 'direccion','area_conocimiento', 'nivel_estudio', 'experiencia'];

  public function getFullNameEntidadAttribute()
  {
     if($this->attributes['tipo_entidad'] == "e")
     return ucwords($this->nombre_entidad);
  }
  public function getFullNamePersonaAttribute()
  {
     if($this->attributes['tipo_entidad'] == "p")
     return ucwords($this->nombre_entidad);
  }
  public function getNombreEtindadAttribute($value)
    {
      return ucfirst($value);
    }
}
