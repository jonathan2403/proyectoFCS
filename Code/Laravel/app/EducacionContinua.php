<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class EducacionContinua extends Model
{
    protected $table = 'educacion_continua';
    protected $fillable=['numero_acta', 
  						'fecha_aprobacion',
  						'fecha_inicio', 
  						'nombre',
  						'ciudad',
  						'recurso', 
  						'pais', 
              'departamento',
  						'horas_certificadas',
  						'area_conocimiento',
  						'recurso_humano',
  						'muebles_equipo',
  						'servicios',
  						'material',
  						'gastos_viaje',
  						'otros_gastos',
              'id_director'
  						];
    public static $reglas_crear = array(
      'nombre' =>'required',
      'numero_acta' => 'required',
      'id_director' => 'required',
      'fecha_aprobacion' => 'required',
      'fecha_inicio' => 'required',
      'pais' => 'required',
      'ciudad' => 'required',
      );

    public static $mensajes = array(
      'numero_acta.required' => 'El campo número de acta es requerido.',
      'id_director.required' => 'El campo director es requerido.',
            );

}
