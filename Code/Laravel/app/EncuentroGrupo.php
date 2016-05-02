<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class EncuentroGrupo extends Model
{
    protected $table = 'encuentros_grupos';
    protected $fillable =['nombre_encuentro', 'id_profesor', 'tipo_grupo', 'lugar', 'modalidad', 'fecha_realizacion'];

    // reglas para crear un Encuentro de Grupos
    public static $reglas_crear = array(
    	'nombre_encuentro' => 'required',
    	'id_profesor' => 'required',
    	'tipo_grupo' => 'required',
    	'fecha_realizacion' => 'required',
    	'modalidad' => 'required'
    	);

    // reglas para editar un Encuentro de Grupos
    public static $reglas_editar = array(
        'nombre_encuentro' => 'required',
        'id_profesor' => 'required',
        'tipo_grupo' => 'required',
        'fecha_realizacion' => 'required',
        'modalidad' => 'required'
        );

    // mensajes de error 
    public static $mensajes = array(
    	'id_profesor.required' => 'El campo ponente es obligatorio.'
    	);
    
}
