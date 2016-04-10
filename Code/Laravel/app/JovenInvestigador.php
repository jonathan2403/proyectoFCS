<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class JovenInvestigador extends Model
{
    protected $table = 'joven_investigador';
    protected $fillable = ['nombre_investigador','tipo','id_grupo'];
}
