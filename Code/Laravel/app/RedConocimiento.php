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
  public function getNombreAttribute($value)
             {
                return ucfirst($value);
             }
  public function getFullNameAttribute()
  {
    return $this->nombre;
  }
}
