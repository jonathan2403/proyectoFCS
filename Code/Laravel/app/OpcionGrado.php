<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class OpcionGrado extends Model
{
    protected $table = 'opcion_grado';
    protected $fillable = ['descripcion',
                           'tipo_opcion_grado',
                           'id_entidad',
                           'id_externo',
                           'carta_director',
                           'carta_coordinador',
                           'linea_investigacion',
    						           'fecha_entrega_ci',
                           'fecha_entrega_cr',
                           'fecha_entrega_jurado',
                           'fecha_entrega_max_jurado',
                           'fecha_entrega_real_jurado',
    						           'concepto_1',
                           'fecha_entrega_1',
                           'concepto_2',
                           'fecha_entrega_2',
                           'concepto_3',
                           'concepto_4',
                           'concepto_5',
                           'concepto_6',
                           'fecha_entrega_informe_2',
                           'fecha_entrega_informe_3',
                           'fecha_aprobacion',
                           'numero_acta',
    						           'fecha_entrega_max_proyecto',
                           'fecha_entrega_informe_final',
                           'numero_acta_2',
                           'numero_acta_3',
                           'fecha_entrega_empaste',
    						           'fecha_entrega_certificado',
                           'finalizado',
                           'id_director',
                           'id_supervisor',
                           'id_proyecto',
                           'evaluacion',
                           'id_grupo'
                         ];
     public function setIdSupervisorAttribute($value){
           $this->attributes['id_supervisor'] = empty($value) ? null : $value;
     }
     public function setIdProyectoAttribute($value){
           $this->attributes['id_proyecto'] = empty($value) ? null : $value;
     }
     public function setIdGrupoAttribute($value){
           $this->attributes['id_grupo'] = empty($value) ? null : $value;
     }
     public function setIdExternoAttribute($value){
           $this->attributes['id_externo'] = empty($value) ? null : $value;
     }
     public function setIdEntidadAttribute($value){
           $this->attributes['id_entidad'] = empty($value) ? null : $value;
     }
     public function getTipoOpcionGradoAttribute($value)
     {
      if($value == 'epps')
          return "EPPS";
      if($value == 'pas')
          return "Pasantía";
      if($value == 'pos')
          return "Posgrado";
      if($value == 'mi')
          return "Mon. Investigativa";
      if($value == 'mr')
          return "Mon. de Revisión";
      if($value == 'epi')
          return "EPI";
     }

     public function getFullNameAttribute()
       {
        return $this->descripcion;
       }
}
