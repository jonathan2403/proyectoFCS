<?php

namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencia';
    protected $fillable = ['id_profesor', 'id_evento', 'id_estudiante'];
        /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_asistencia';   
}
