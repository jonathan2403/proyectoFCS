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
}
