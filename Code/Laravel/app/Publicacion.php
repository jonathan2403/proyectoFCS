<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicacion';
    protected $fillable=['descripcion',
    					'tipo',
    					'id_proyecto',
    					'id_opcion_grado',
    					'id_grupo',
    					'fecha_publicacion',
                        'tipo_publicacion'
    					];
    public function setIdProyectoAttribute($value)
     {
        $this->attributes['id_proyecto'] = empty($value) ? null : $value;
     }
     public function setIdOpcionGradoAttribute($value)
     {
     	$this->attributes['id_opcion_grado']  = empty($value) ? null : $value;
     }
     public function setIdGrupoAttribute($value)
     {
     	$this->attributes['id_grupo'] = empty($value) ? null : $value;
     }
}
