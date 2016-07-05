<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    protected $table = 'planes_estudios';
    protected $fillable=['codigo','fecha_resolucion','numero_resolucion','fecha_inicio','fecha_fin','id_programa'];

    public function programa()
    {
    	return $this->belongsTo('\FCS\Programa','id_programa');
    }

    public static function ListaPlanes()
    {
        return self::get()->lists('codigo' ,'id' );
    } 
}

