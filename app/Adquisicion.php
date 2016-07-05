<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Adquisicion extends Model
{
    protected $table = 'adquisicion';
    protected $fillable = ['id_proyecto', 'nombre_articulo','cantidad','valor_unidad'];
}
