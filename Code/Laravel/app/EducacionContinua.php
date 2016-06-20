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

    public function director(){
        return $this->belongsTo('FCS\Profesor', 'id_director');
    }

    public static $reglas_crear = array(
      'nombre' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
      'numero_acta' => 'required|digits_between:2,9',
      'id_director' => 'required|exists:profesores,id',
      'fecha_aprobacion' => 'required|date_format:m/d/Y',
      'fecha_inicio' => 'required|date_format:m/d/Y',
      'pais' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
      'ciudad' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
      );

    public static $mensajes = array(
      'numero_acta.required' => 'El campo número de acta es requerido.',
      'id_director.required' => 'El campo director es requerido.',
            );

}
