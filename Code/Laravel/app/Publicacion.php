<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicacion';
    protected $fillable=['descripcion','tipo','id_proyecto','id_opcion_grado','id_grupo','fecha_publicacion', 'tipo_publicacion'];

    public static $reglas = array(
        'descripcion' => 'required|max:150|regex:/^[0-9A-Za-zñÑáéíóúÁÉÍÓÚ\-! ,\'\"\/@\.:\(\)]+$/',
        'tipo_publicacion' => 'required|in:ps,i',
        'tipo' => 'required|in:ri,re,li,ar',
        'id_proyecto' => 'exists:proyecto,id',
        'id_opcion_grado' => 'exists:opcion_grado,id',
        'id_grupo' => 'exists:grupo,id',
        'fecha_publicacion' => 'required|date_format:m/d/Y',
        );

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
