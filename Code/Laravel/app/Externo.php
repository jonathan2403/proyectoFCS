<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Externo extends Model
{
  protected $table = 'externo';
  protected $fillable = ['nombre_externo', 'tipo_externo', 'telefono', 'correo', 'direccion','area_conocimiento', 'nivel_estudio', 'experiencia'];

  
  public function getFullNameEntidadAttribute()
  {
       return ucwords($this->nombre_externo);  
  }
  public function getFullNamePersonaAttribute()
  {
     if($this->attributes['tipo_externo'] == "p")
     return ucwords($this->nombre_externo);
  }
  public function getNombreEntidadAttribute($value)
    {
      return ucfirst($value);
    }

  public static $reglas = array(
    'tipo_externo' => 'required|in:p,e',
    'nombre_externo' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    'correo' => 'email|max:50',
    'area_conocimiento' => "max:150|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    'nivel_estudio' => "max:50|regex:/^[0-9A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    'experiencia' => 'max:50|numeric',
    'telefono' => 'required|digits_between:5,10',
    'direccion' => 'max:80|regex:/^[0-9A-Za-zñÑáéíóúÁÉÍÓÚ\-! ,\'\"\/@\.:\(\)]+$/'
    );
}
