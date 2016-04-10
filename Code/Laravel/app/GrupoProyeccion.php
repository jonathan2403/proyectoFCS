<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;
use FCS\Http\Requests\CreateGrupoRequest;
use FCS\Http\Requests\EditGrupoRequest;
use FCS\Grupo;
use FCS\Profesor;
use FCS\Estudiante;
use DB, View, Session, Redirect;

class GrupoProyeccion extends Model
{
    protected $table = 'grupo';
    protected $fillable = ['sigla', 'descripcion', 'tipo', 'id_profesor'];

    public function getFullNameAttribute()
    {
      $name = $this->sigla.' - '.$this->descripcion;
      return ucwords($name);
    }
    public function getSiglaAttribute($value)
    {
      return ucwords($value);
    }
}
