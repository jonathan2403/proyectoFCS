<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';
    protected $fillable=['nombre_programa'];

    public static function ListaPrograma()
    {
        return self::get()->lists('nombre_programa' ,'id' );
    }

}

