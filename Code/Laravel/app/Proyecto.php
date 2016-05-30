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


    public static $reglas = array(
      'titulo_proyecto' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
      'tema_central' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
      'id_red_conocimiento' => 'required|exists:red_conocimiento,id',
      'tipo' => 'in:ps,i',
      'tipo_proyecto' => 'in:cp,ccr,cc,cct,cre,pc',
      'fecha_inicio' => 'date_format:m/d/Y',
      'numero_acta' => 'required|digits_between:2,8',
      'fecha_avance1' => 'required|date_format:m/d/Y',
      'fecha_avance2' => 'date_format:m/d/Y',
      'fecha_avance3' => 'date_format:m/d/Y',
      'fecha_informe_final' => 'date_format:m/d/Y',
      'fecha_prorroga' => 'date_format:m/d/Y',
      'bienes_adquiridos' => 'integer',
      'valor_efectivo' => 'integer',
      'beneficiados' => 'integer',
      'ejecutado' => 'in:Si,No',
      'id_investigador_principal' => 'required|exists:profesores,id',
      'beneficiados_administrativos',
      'beneficiados_estudiantes' => 'integer',
      'beneficiados_egresado' => 'integer',
      'beneficiados_docentes' => 'integer',
      'beneficiados_publico' => 'integer',
      'beneficiados_privado' => 'integer',
      'beneficiados_general' => 'integer',
      'beneficiados_0_10' => 'integer',
      'beneficiados_11_20' => 'integer',
      'beneficiados_21_30' => 'integer',
      'beneficiados_31_60' => 'integer',
      'beneficiados_mayores_60' => 'integer',
      'beneficiados_academia' => 'integer',
      'beneficiados_alianza' => 'integer',
      'beneficiados_sociedad' => 'integer',
      'beneficiados_otros' => 'integer',
      'beneficiados_hombres' => 'integer',
      'beneficiados_mujeres' => 'integer',
      );

    public static $mensajes = array(
      'id_red_conocimiento.required' => 'Red conocimiento es obligatorio.',
      'id_investigador_principal.required'  => 'Investigador principal es obligatorio.'
      );

    public function getTituloProyectoAttribute($value)
           {
             return ucfirst($value);
           }

     public function getFullNameAttribute()
      {
        return $this->titulo_proyecto;
      }

}
