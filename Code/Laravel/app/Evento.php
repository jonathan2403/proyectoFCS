<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    protected $fillable=['numero_consejo', 'fecha', 'nombre_evento', 'descripcion_evento', 'departamento', 'ciudad', 'docentes', 'valor_efectivo', 'pais', 'horas_certificadas', 'beneficiados', 'id_tipoeventos', 'beneficiados_administrativos', 'beneficiados_estudiantes', 'beneficiados_egresado', 'beneficiados_docentes', 'beneficiados_publico', 'beneficiados_privado', 'beneficiados_general', 'beneficiados_0_10', 'beneficiados_11_20', 'beneficiados_21_30', 'beneficiados_31_60', 'beneficiados_mayores_60','beneficiados_hombres','beneficiados_mujeres'];

    public function tipo()
    {
    	return $this->belongsTo('\FCS\TipoEvento','id_tipoeventos');
    }

    public static $reglas = [
    	'numero_consejo' => 'required|digits_between:2,9', 
    	'fecha' => 'required|date_format:m/d/Y',
    	'nombre_evento' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    	'descripcion_evento' => "max:200|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    	'departamento' => "max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    	'ciudad' => "max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    	'docentes' => "numeric",
    	'valor_efectivo' => "numeric",
    	'pais' => "max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    	'horas_certificadas' => "numeric", 
    	'beneficiados' => "numeric", 
    	'id_tipoeventos' => "required|exists:tipo_eventos,id", 
    	'beneficiados_administrativos' => "numeric", 
    	'beneficiados_estudiantes' => "numeric", 
    	'beneficiados_egresado' => "numeric", 
    	'beneficiados_docentes' => "numeric", 
    	'beneficiados_publico' => "numeric", 
    	'beneficiados_privado' => "numeric", 
    	'beneficiados_general' => "numeric", 
    	'beneficiados_0_10' => "numeric", 
    	'beneficiados_11_20' => "numeric", 
    	'beneficiados_21_30' => "numeric", 
    	'beneficiados_31_60' => "numeric", 
    	'beneficiados_mayores_60' => "numeric",
    	'beneficiados_hombres' => "numeric",
    	'beneficiados_mujeres' => "numeric"
    	];

    public static $mensajes = [
    'numero_consejo.required' => "El campo acta de consejo es obligatorio.",
    'numero_consejo.digits_between' => "Acta de consejo debe tener entre 2 y 9 números.",
    ];
}
