<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Requiere extends Model
{
  protected $table = 'requiere';
  protected $fillable = ['id_proyecto', 'id_opcion_grado'];
}
