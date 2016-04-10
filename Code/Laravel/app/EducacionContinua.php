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



}
