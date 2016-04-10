<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Vinculacion extends Model
{
    protected $table = 'vinculaciones';
    protected $fillable=['nombre_vinculacion'];

}
