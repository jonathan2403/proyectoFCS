<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class EncuentroGrupo extends Model
{
    protected $table = 'encuentros_grupos';
    protected $fillable =['nombre_encuentro', 'id_profesor', 'tipo_grupo', 'lugar', 'modalidad', 'fecha_realizacion', 'municipio', 'departamento'];

    public function municipios(){
        return $this->belongsTo('FCS\Municipio', 'municipio');
    }

    public function profesor(){
        return $this->belongsTo('FCS\Profesor', 'id_profesor');
    }
    // reglas para crear un Encuentro de Grupos
    public static $reglas = array(
    	'nombre_encuentro' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
    	'id_profesor' => 'required|exists:profesores,id',
    	'tipo_grupo' => 'required|in:i,e,ps',
    	'fecha_realizacion' => 'required|date_format:m/d/Y',
    	'modalidad' => 'required|in:poster,oral',
        //'lugar' => "required|max:50|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.:\(\)]+$/",
        'municipio' => "required",
    	);

    // mensajes de error 
    public static $mensajes = array(
    	'id_profesor.required' => 'El campo ponente es obligatorio.',
        'id_profesor.exists' => 'El campo ponente es inválido.'
    	);
    
}
