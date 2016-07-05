<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
  protected $table = 'producciones';
  protected $fillable = ['id_proyecto', 'id_publicacion'];
}
