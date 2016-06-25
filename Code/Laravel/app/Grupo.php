<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo';
    protected $fillable = ['sigla', 'descripcion', 'tipo', 'id_profesor', 'categoria'];

    const INVESTIGACION = 'i';
    const ESTUDIO = 'e';
    const PROYECCION_SOCIAL = 'ps';

    public function getNombreGrupoAttribute()
    {
      $name = $this->sigla.' - '.$this->descripcion;
      return ucwords($name);
    }

    public function getFullNameAttribute(){
      return $this->attributes['descripcion'];
    }

    // relación uno a muchos con la tabla adscripciones
    public function adscripciones(){
      return $this->hasMany('FCS\Adscripcion', 'id_grupo');
    }

    // relación con profesor
    public function coordinador(){
      return $this->belongsTo('FCS\Profesor', 'id_profesor');
    }

    public static $reglas = array(
      'sigla' => "max:50|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.\(\)]+$/",
      'descripcion' => "required|max:100|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ\! '\@\.\(\)]+$/",
      'tipo' => 'required|in:i,e,ps',
      'categoria' => 'required|in:a,b,c,d',
      'id_profesor' => 'required|exists:profesores,id'
      );

    public static $mensajes = array(
      'id_profesor.required' => 'El campo coordinador es obligatorio.',
      'id_profesor.exists' => 'coordinador no existe',
      'descripcion.required' => 'El campo nombre es obligatorio.',
      'descripcion.max' => 'nombre no debe ser mayor que 100 caracteres.',
      'descripcion.regex' => 'El formato de nombre es inválido.'
      );
}
