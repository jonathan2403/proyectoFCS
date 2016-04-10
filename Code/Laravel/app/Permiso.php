<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permisos';
    protected $fillable=['iduser','idmenus','permiso'];

}
