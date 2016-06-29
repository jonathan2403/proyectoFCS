<?php 
namespace FCS;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    public $primaryKey = "departamento";

    public function municipios() 
    {
        return $this->hasMany(Municipio::class,'departamento','departamento');
    }

    public function getListaDeMunicipios()
    {
    	return $this->municipios->lists('nombre', 'municipio');
    }


}
