<?php
namespace FCS;
use Illuminate\Database\Eloquent\Model;

class JovenInvestigador extends Model
{
    protected $table = 'joven_investigador';
    protected $fillable = ['id_estudiante', 'id_profesor', 'id_grupo', 'colciencias', 'id_institucion', 'producto'];

    public function estudiante(){
        return $this->belongsTo('FCS\Estudiante', 'id_estudiante');
    }

    public function profesor(){
        return $this->belongsTo('FCS\Profesor', 'id_profesor');
    }

    public function grupo(){
        return $this->belongsTo('FCS\Grupo', 'id_grupo');
    }

    public function institucion(){
        return $this->belongsTo('FCS\Externo', 'id_institucion');
    }

    public function setIdGrupoAttribute($value){
        $this->attributes['id_grupo'] = empty($value) ? null : $value;
    }

    public function setIdInstitucionAttribute($value){
        $this->attributes['id_institucion'] = empty($value) ? null : $value;
    }

    public static $reglas_crear = array(
    	'id_estudiante' => 'required|exists:estudiantes,id',
    	'id_profesor' => 'required|exists:profesores,id'
    	);

    public static $mensajes = array(
    	'id_estudiante.required' => 'El campo estudiante es obligatorio.',
    	'id_profesor.required' => 'El campo tutor es obligatorio'
    	);
}
