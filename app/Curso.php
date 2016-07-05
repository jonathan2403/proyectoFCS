<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable=['codigo_curso','nombre_curso','tipo_curso','semestre','area','creditos','id_planestudio'];

    public function plan()
    {
    	return $this->belongsTo('\FCS\PlanEstudio','id_planestudio');
    }   
}


