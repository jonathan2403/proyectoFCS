<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;
use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Profesor;
use FCS\Externo;
use Session, Redirect;
use FCS\Base\ExportFiles;

class ExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($componente)
    {
        switch($componente){
            case 'proyeccion':
            $indicador_modulo = 16;
            $externos = Externo::all();
            break;
            case 'investigacion':
            $indicador_modulo = 22;
            $externos = Externo::all();
            break;
        }
        return view('componentes.externo.index', compact('externos', 'indicador_modulo', 'componente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $componente)
    {
        $tipo_externo = $request->get('tipo_externo');
        switch ($componente) {
            case 'proyeccion':
                $indicador_modulo = 16;       
                break;
            default:
                $indicador_modulo = 22;
                break;
        }
        return view('componentes.externo.addexterno', compact('indicador_modulo', 'tipo_externo', 'componente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $datos = $request->all();
      $valida = \Validator::make($datos, Externo::$reglas);
      if($valida->fails()){
        return redirect()->back()->withErrors($valida->errors())->withInput();
      }
      Externo::create($datos);
      return redirect('externo/'.$datos['componente'])->with('message','Registro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador_modulo = 16;
        $externo = Externo::find($id);
        if(!$externo)
            return redirect()->back();
        return view('componentes.externo.show_externo', compact('externo', 'indicador_modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $componente)
    {
        switch ($componente) {
            case 'proyeccion':
                $indicador_modulo = 16;       
                break;
            default:
                $indicador_modulo = 22;
                break;
        }
        $externo = Externo::find($id);
        if(!$externo)
            return redirect()->back();
        return view('componentes.externo.editexterno', compact('externo', 'indicador_modulo', 'componente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $datos = $request->all();
        $valida = \Validator::make($datos, Externo::$reglas);
        if($valida->fails()){
            return redirect()->back()->withErrors($valida->errors())->withInput($datos);
        }
         $externo  = Externo::find($datos['id_externo']);
         $externo->fill($datos);
         $externo->save();
        return redirect('externo/'.$datos['componente'])->with('message','Registro Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Externo::destroy($id);
      Session::flash('message','Registro Eliminado!');
      return Redirect::to('/externo');
    }

    /**
     * Descargar Excel
     */
    public function reporte($page, $id_externo = null, $tipo_archivo){
    switch($page){
        case 'index':
        $externos = Externo::select('externo.nombre_externo AS Nombre', \DB::raw("CASE WHEN externo.tipo_externo = 'p' THEN 'persona' ELSE 'entidad' END AS Tipo"), 'externo.correo AS Correo', 'externo.telefono AS Teléfono', 'externo.direccion AS Dirección')
        ->get();
        if($tipo_archivo == 'excel'){
            $exportExcel = new ExportFiles();
            $exportExcel->createExcel($externos, 'Externos Index', 'E1');        
        }else{
            $exportPdf = new ExportFiles();
            $exportPdf->createPdf($externos, 'Externos Index', 'E1');   
        }
        break;

        default:
        $externos = Externo::where('id', $id_externo)->get();
        $nombre_archivo = 'Detalle Externo';
        break;
        }   // final case
    }   // final funcion reporte

}
