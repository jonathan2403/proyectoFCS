<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Adscripcion extends Model
{
    protected $table = 'adscripcion';
    protected $fillable = ['id_estudiante', 'id_grupo'];
}
