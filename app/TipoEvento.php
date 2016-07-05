<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $table = 'tipo_eventos';
    protected $fillable=['nombre_tipoevento'];

    public static function allLists()
    {
        return self::get()->lists('nombre_tipoevento' ,'id' );
    }

    public function evento()
    {
    	return $this->hasMany('\FCS\Evento');
    }

    public static $reglas = array(
        'nombre_tipoevento' => 'required'
        );

    public static $mensajes = array(
        'nombre_tipoevento.required' => 'El campo nombre es obligatorio.'
        );
}
