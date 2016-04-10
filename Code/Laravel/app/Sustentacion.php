<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Sustentacion extends Model
{
    protected $table = 'sustentacion';
    protected $fillable = ['id_estudiante', 'id_opcion_grado'];
}
