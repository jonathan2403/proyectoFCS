<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class EncuentroGrupo extends Model
{
    protected $table = 'encuentros_grupos';
    protected $fillable =['nombre_encuentro', 'id_profesor', 'tipo_grupo', 'lugar', 'modalidad', 'fecha_realizacion'];
}
