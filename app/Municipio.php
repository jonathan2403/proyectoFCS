<?php 
namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipio';

    public $primaryKey = "municipio";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function departamentos() 
    {
        return $this->belongsTo('FCS\Departamento', 'departamento');
    }

}
