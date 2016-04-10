<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';
    protected $fillable = ['titulo_proyecto', 'tema_central', 'id_red_conocimiento', 'tipo', 'tipo_proyecto',
                            'fecha_inicio', 'numero_acta', 'fecha_avance1', 'fecha_avance2', 'fecha_avance3',
                             'fecha_informe_final', 'fecha_prorroga', 'bienes_adquiridos', 'valor_efectivo', 'beneficiados',
                             'ejecutado', 'id_investigador_principal', 'beneficiados_administrativos', 'beneficiados_estudiantes',
                              'beneficiados_egresado', 'beneficiados_docentes', 'beneficiados_publico', 'beneficiados_privado', 
                              'beneficiados_general', 'beneficiados_0_10', 'beneficiados_11_20', 'beneficiados_21_30', 'beneficiados_31_60', 
                              'beneficiados_mayores_60','beneficiados_academia','beneficiados_alianza','beneficiados_sociedad',
                              'beneficiados_otros', 'beneficiados_hombres', 'beneficiados_mujeres'];

    public function getTituloProyectoAttribute($value)
           {
             return ucfirst($value);
           }

    public function getTipoProyectoAttribute($value)
     {
       if($value=='pc')
       return "Proy. Comunitario";
     }

     public function getFullNameAttribute()
      {
        return $this->titulo_proyecto;
      }

}
