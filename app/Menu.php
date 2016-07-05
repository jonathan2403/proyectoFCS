<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable=['nombre','ruta','imagen'];

}
