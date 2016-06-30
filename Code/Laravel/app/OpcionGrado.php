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

     // Relación director
    public function director(){
      return $this->belongsTo('FCS\Profesor', 'id_director');
    }

    // Relación con externo
    public function coordinadorExterno(){
      return $this->belongsTo('FCS\Externo', 'id_externo');
    }

     public static $reglas_pas = [
          'descripcion' => "required|max:150|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
          'id_director' => 'required|exists:profesores,id',
          'id_externo' => 'required|exists:externo,id',
          'id_entidad' => 'required|exists:externo,id',
          'fecha_aprobacion' => 'required|date_format:m/d/Y',
          'concepto_1' => 'required|in:ap,na,aa',
          'numero_acta' => 'required|digits_between:2,9',
          'finalizado' => 'in:s,n'
     ];

     public static $mensajes_pas = [
        'descripcion.required' => 'El campo título es obligatorio.',
        'descripcion.max' => 'Título no puede exceder 150 caracteres.',
        'id_director.required' => 'El campo director es obligatorio.',
        'id_director.exists' => 'El director no existe.',
        'id_externo.required' => 'El campo entidad es obligatotio.',
        'id_externo.exists' => 'Entidad no existe.',
        'id_entidad.required' => 'El campo entidad es obligatotio.',
        'id_entidad.exists' => 'Entidad no existe.',
        'fecha_aprobacion.required' => 'Fecha de entrega al comité es obligatorio.'
     ];

     public static $reglas_epps = [
          'descripcion' => "required|max:150|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
          'id_director' => 'required|exists:profesores,id',
          'id_externo' => 'required|exists:externo,id',
          'fecha_aprobacion' => 'required|date_format:m/d/Y',
          'fecha_entrega_ci'  => 'required|date_format:m/d/Y',
          'concepto_1' => 'required|in:ap,na,aa',
          'numero_acta' => 'required|digits_between:2,9',
          'finalizado' => 'required|in:s,n'
     ];

     public static $mensajes_epps = [
        'descripcion.required' => 'El campo título es obligatorio.',
        'descripcion.max' => 'Título no puede exceder 150 caracteres.',
        'id_director.required' => 'El campo director es obligatorio.',
        'id_director.exists' => 'El director no existe.',
        'id_externo.required' => 'El campo entidad es obligatotio.',
        'id_externo.exists' => 'Entidad no existe.',
        'fecha_aprobacion.required' => 'Fecha de entrega al comité de revisión es obligatorio.',
        'fecha_entrega_ci.required' => 'Fecha de entrega al centro de P. S.',
        'concepto_1.required' => 'Concepto de entrega al comité de revisión es obligatorio.',
        'numero_acta.required'  => 'N° de acta de entrega al comité de revisión es obligatorio.',
        'finalizado.required' => 'El campo finalizado es obligatorio.'
     ];

     public static $reglas_pos = [
          'descripcion' => "required|max:150|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
          'id_director' => "required",
          'fecha_aprobacion' => 'required|date_format:m/d/Y',
          'concepto_1' => 'required|in:ap,na,aa',
          'numero_acta' => 'required|digits_between:2,9',
     ];

     public static $mensajes_pos = [
        'descripcion.required' => 'El campo título es obligatorio.',
        'descripcion.max' => 'Título no puede exceder 150 caracteres.',
        'id_director.required' => "Director es obligatorio.",
        'fecha_aprobacion.required' => 'Fecha de entrega al comité es obligatorio.',
        'concepto_1.required' => 'Concepto entrega al comité es obligatorio.',
        'numero_acta.required'  => 'Número de acta entrega al comité es obligatorio.'
     ];

     public static $reglas_investigacion = array(
        'descripcion' => "required|max:150|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
        'tipo_opcion_grado' => 'in:mr,mi,epi,epps,pas,pos',
        'linea_investigacion' => 'in:cu,sp',
        'carta_director' => 'in:s,n',
        'carta_coordinador' => 'in:s,n',
        'fecha_entrega_ci' => 'required|date_format:m/d/Y',
        'fecha_entrega_cr' => 'date_format:m/d/Y',
        'fecha_entrega_jurado' => 'date_format:m/d/Y',
        'fecha_entrega_max_jurado' => 'date_format:m/d/Y',
        'fecha_entrega_real_jurado' => 'date_format:m/d/Y',
        'evaluacion' => 'in:ap,na,aa,me,la',
        'concepto1' => 'in:ap,na,aa',
        'fecha_entrega_1' => 'date_format:m/d/Y',
        'concepto_2' => 'in:ap,na,aa',
        'fecha_entrega_2' => 'date_format:m/d/Y',
        'concepto_3' => 'in:ap,na,aa',
        'concepto_4' => 'in:ap,na,aa',
        'concepto_5' => 'in:ap,na,aa',
        'concepto_6' => 'in:ap,na,aa',
        'fecha_entrega_informe_2' => 'date_format:m/d/Y',
        'fecha_entrega_informe_3' => 'date_format:m/d/Y',
        'fecha_aprobacion' => 'date_format:m/d/Y',
        'numero_acta' => 'digits_between:2,8',
        'fecha_entrega_max_proyecto' => 'date_format:m/d/Y',
        'fecha_entrega_informe_final' => 'date_format:m/d/Y',
        'numero_acta_2' => 'digits_between:2,9',
        'numero_acta_3' => 'digits_between:2,9',
        'fecha_entrega_empaste' => 'date_format:m/d/Y',
        'fecha_entrega_certificado' => 'date_format:m/d/Y',
        'finalizado' => 'required|in:s,n',
        'id_director' => 'required|exists:profesores,id',
        'id_entidad' => 'required|exists:externo,id',
        'id_externo' => 'exists:externo,id',
        'id_supervisor' => 'required|exists:profesores,id',
        'id_proyecto' => 'exists:proyecto,id',
        'id_grupo' => 'exists:grupo,id'
      );

     public static $mensajes_investigacion = array(
        'descripcion.required' => 'El campo título es obligatorio.',
        'descripcion.max' => 'Título no puede exceder 150 caracteres.',
        'descripcion.regex' => 'Título tiene formato inválido.',
        'id_director.required' => 'El campo director es obligatorio.',
        'id_director.exists' => 'El director no existe.',
        'id_supervisor.required' => 'El campo jurado es obligatorio.',
        'id_supervisor.exists' => 'El jurado no existe.',
        'id_entidad.required' => 'El campo entidad es obligatotio.',
        'id_entidad.exists' => 'Entidad no existe.',
        'fecha_entrega_ci.required' => 'Fecha entrega al c. investigación es obligatorio.',
        'fecha_entrega_ci.date_format' => 'Formato fecha entrega al c. investigación inválido'
      );

     public static $reglas_proyeccion = array(
        'descripcion' => "required|max:150|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
        'tipo_opcion_grado' => 'in:mr,mi,epi,epps,pas,pos',
        'linea_investigacion' => 'in:cu,sp',
        'carta_director' => 'in:s,n',
        'carta_coordinador' => 'in:s,n',
        'fecha_entrega_ci' => 'required|date_format:m/d/Y',
        'fecha_entrega_cr' => 'date_format:m/d/Y',
        'fecha_entrega_jurado' => 'date_format:m/d/Y',
        'fecha_entrega_max_jurado' => 'date_format:m/d/Y',
        'fecha_entrega_real_jurado' => 'date_format:m/d/Y',
        'evaluacion' => 'in:ap,na,aa,me,la',
        'concepto1' => 'in:ap,na,aa',
        'fecha_entrega_1' => 'date_format:m/d/Y',
        'concepto_2' => 'in:ap,na,aa',
        'fecha_entrega_2' => 'date_format:m/d/Y',
        'concepto_3' => 'in:ap,na,aa',
        'concepto_4' => 'in:ap,na,aa',
        'concepto_5' => 'in:ap,na,aa',
        'concepto_6' => 'in:ap,na,aa',
        'fecha_entrega_informe_2' => 'date_format:m/d/Y',
        'fecha_entrega_informe_3' => 'date_format:m/d/Y',
        'fecha_aprobacion' => 'date_format:m/d/Y',
        'numero_acta' => 'digits_between:2,8',
        'fecha_entrega_max_proyecto' => 'date_format:m/d/Y',
        'fecha_entrega_informe_final' => 'date_format:m/d/Y',
        'numero_acta_2' => 'digits_between:2,9',
        'numero_acta_3' => 'digits_between:2,9',
        'fecha_entrega_empaste' => 'date_format:m/d/Y',
        'fecha_entrega_certificado' => 'date_format:m/d/Y',
        'finalizado' => 'required|in:s,n',
        'id_director' => 'required|exists:profesores,id',
        'id_entidad' => 'required|exists:externo,id',
        'id_externo' => 'exists:externo,id',
        'id_supervisor' => 'required|exists:profesores,id',
        'id_proyecto' => 'exists:proyecto,id',
        'id_grupo' => 'exists:grupo,id'
      );

     public static $mensajes_proyeccion = array(
        'descripcion.required' => 'El campo título es obligatorio.',
        'descripcion.max' => 'Título no puede exceder 150 caracteres.',
        'descripcion.regex' => 'Título tiene formato inválido.',
        'id_director.required' => 'El campo director es obligatorio.',
        'id_director.exists' => 'El director no existe.',
        'id_supervisor.required' => 'El campo jurado es obligatorio.',
        'id_supervisor.exists' => 'El jurado no existe.',
        'id_entidad.required' => 'El campo entidad es obligatotio.',
        'id_entidad.exists' => 'Entidad no existe.',
        'fecha_entrega_ci.required' => 'Fecha entrega al c. investigación es obligatorio.',
        'fecha_entrega_ci.date_format' => 'Formato fecha entrega al c. investigación inválido'
      );

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
