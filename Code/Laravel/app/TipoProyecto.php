<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
  protected $table = 'tipo_proyectos';
  protected $fillable=['nombre_tipoproyecto'];

  public static function allLists()
  {
      return self::get()->lists('nombre_tipoproyecto' ,'id' );
  }

  public function proyecto()
  {
    return $this->hasMany('\FCS\Proyecto');
  }
}
