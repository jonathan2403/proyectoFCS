<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class RedConocimiento extends Model
{
  protected $table = 'red_conocimiento';
  protected $fillable = ['nombre',
                          'proposito',
                          'compromiso',
                          'telefono',
                          'direccion',
                          'email',
                          'fecha_ultima_reunion',
                          'asistentes',
                          'id_responsable'
                        ];
  public static $reglas = array(
    'nombre' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    'proposito' => "max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    'compromiso' => "max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    'telefono' => 'required|digits_between:8,15|max:15',
    'direccion' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\#°.:\(\)]+$/",
    'email' => 'required|email',
    'fecha_ultima_reunion' => 'required|date_format:m/d/Y',
    'asistentes' => 'digits_between:0,9|max:20',
    'id_responsable' => 'required|exists:profesores,id'
    );

  public static $mensajes = array(
    'id_responsable.required' => 'El campo responsable es obligatorio.'
    );

  public function getNombreAttribute($value)
             {
                return ucfirst($value);
             }
  public function getFullNameAttribute()
  {
    return $this->nombre;
  }
}
