<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Municipio;
use FCS\Http\Requests;
use Session;
use Redirect;
use FCS\Http\Controllers\Controller;

class ServiciosBaseController extends Controller
{
   /**
    * [consultarMunicipios consulta listato de municipios pertenecientes a un departamente]
    * @param  [type] $id_departamento [id del departamento]
    * @return [type]                  [listado de municipios]
    */
   public function consultarMunicipios($id_departamento){
        $municipios = Municipio::select('municipio', 'nombre')->where('departamento', $id_departamento)->get();
        return $municipios->toArray();
   }
}
