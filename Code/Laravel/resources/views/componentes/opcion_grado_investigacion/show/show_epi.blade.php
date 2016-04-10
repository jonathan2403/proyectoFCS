@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('componentes.opcion_grado_investigacion.partials.modal_sustentacion')
    @include('componentes.opcion_grado_investigacion.partials.modal_borrarSustentacion')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <table class="table">
              <thead>
                <th><center>Descripción EPI</center></th>
                <th><center>Director</center></th>
                <th><center>Director 2</center></th>
                <th><center>Entidad</center></th>
              </thead>
              <tbody>
                <td>{{$opcion_grados[0]->descripcion}}</td>
                <td><center><?php echo ucwords($director[0]->name_director);?></td>
                <td><center>
                  <?php
                  if(empty($supervisor))
                    echo "No Registra";
                  else
                    echo ucwords($supervisor[0]->name_supervisor);?>
                </center></font></td>
                @if(empty($entidad))
                <td><center>No Registra</center></td>
                @else
                <td><center>{{ucfirst($entidad[0]->nombre_entidad)}}</center></td>
                @endif
              </tbody>
            </table>
              <hr>
              <table class="table">
                <thead>
                  <th>Proyecto al que pertenece</th>
                  <th><center>Línea Investigación</center></th>
                  <th><center>Grupo</center></th>
                </thead>
                <tbody>
                  <td><font size="3px">
                    <?php
                      if(empty($nombre_proyecto))
                        echo "No Registra";
                      else
                        echo ucwords($nombre_proyecto[0]->titulo_proyecto);?>
                  </font></td>
                  @if($opcion_grados[0]->linea_investigacion == 'cu')
                  <td><font size="3px"><center>Cuidado</center></font></td>
                  @else
                  <td><font size="3px"><center>Salud Pública</center></font></td>
                  @endif
                  <td><font size="3px"><center>
                    <?php
                      if(empty($grupo))
                        echo "No Registra";
                      else
                        echo ucwords($grupo[0]->sigla);?>
                  </center></font></td>
                </tbody>
              </table></br>
            <table class="table table-striped">
              <thead>
                <th>Entrega C.I</th>
                <th>Comite de Revisión</th>
                <th>Entrega al jurado</th>
                <th>Entrega max. del jurado</th>
              </thead>
              <tbody>
                <td>{{$opcion_grados[0]->fecha_entrega_ci}}</td>
                <td>{{$opcion_grados[0]->fecha_entrega_cr}}</td>
                <td>{{$opcion_grados[0]->fecha_entrega_jurado}}</td>
                <td>{{$opcion_grados[0]->fecha_entrega_max_jurado}}</td>
              </tbody>
            </table>
               <hr>
            <table class="table table-striped">
              <thead>
                <th><center>Entrega Real del Jurado</center></th>
                <th><center>Entrega 1</th>
                <th><center>Entrega 2</center></th>
                <th><center>Entrega max. del proyecto</center></th>
              </thead>
              <tbody>
                <td>{{$opcion_grados[0]->fecha_entrega_real_jurado}} - @if($opcion_grados[0]->concepto_1 == 'ap') Aprobado @endif @if($opcion_grados[0]->concepto_1 == 'na') No Aprobado @endif @if($opcion_grados[0]->concepto_1 == 'aa') Aprobado con Ajustes @endif</td>
                <td><center>{{$opcion_grados[0]->fecha_entrega_1}} - @if($opcion_grados[0]->concepto_2 == 'ap') Aprobado @endif @if($opcion_grados[0]->concepto_2 == 'na') No Aprobado @endif @if($opcion_grados[0]->concepto_2 == 'aa') Aprobado con Ajustes @endif</center></td>
                <td><center>{{$opcion_grados[0]->fecha_entrega_2}} - @if($opcion_grados[0]->concepto_3 == 'ap') Aprobado @endif @if($opcion_grados[0]->concepto_3 == 'na') No Aprobado @endif @if($opcion_grados[0]->concepto_3 == 'aa') Aprobado con Ajustes @endif</center></td>
                <td><center>{{$opcion_grados[0]->fecha_entrega_max_proyecto}}</center></td>
              </tbody>
            </table>
            <hr>
            <font size="4px"><b><center>INFORME</center></b></font>
             <table class="table table-striped">
             <thead>
               <th>Entrega informe final</th>
               <th>Entrega Informe 1</th>
               <th>Entrega Informe 2</th>
               <th>Entrega De Certificado</th>
               <th>Empaste</th>
               <th>Evaluacion</th>
             </thead>
             <tbody>
               <td>{{$opcion_grados[0]->fecha_entrega_informe_final}} - @if($opcion_grados[0]->concepto_4 == 'ap') Aprobado @endif @if($opcion_grados[0]->concepto_4 == 'na') No Aprobado @endif @if($opcion_grados[0]->concepto_4 == 'aa') Aprobado con Ajustes @endif</td>
               <td>{{$opcion_grados[0]->fecha_entrega_informe_2}} - @if($opcion_grados[0]->concepto_5 == 'ap') Aprobado @endif @if($opcion_grados[0]->concepto_5 == 'na') No Aprobado @endif @if($opcion_grados[0]->concepto_5 == 'aa') Aprobado con Ajustes @endif</td>
               <td>{{$opcion_grados[0]->fecha_entrega_informe_3}} - @if($opcion_grados[0]->concepto_6 == 'ap') Aprobado @endif @if($opcion_grados[0]->concepto_6 == 'na') No Aprobado @endif @if($opcion_grados[0]->concepto_6 == 'aa') Aprobado con Ajustes @endif</td>
               <td>{{$opcion_grados[0]->fecha_entrega_certificado}}</td>
               <td>{{$opcion_grados[0]->fecha_entrega_empaste}}</td>
               @if($opcion_grados[0]->evaluacion == 'ap')
               <td>Aprobado</td>
               @endif
               @if($opcion_grados[0]->evaluacion == 'np')
                <td>Aprobado</td>
               @endif
               @if($opcion_grados[0]->evaluacion == 'aa')
                <td>Apr. con Ajustes</td>
               @endif
               @if($opcion_grados[0]->evaluacion == 'me')
                <td>Meritoria</td>
               @endif
               @if($opcion_grados[0]->evaluacion == 'la')
                <td>Laureada</td>
               @endif
             </tbody>
           </table>
          </div><!-- /.box-header -->
          <div class="box-body">
            <font size="4px"><b><center>PARTICIPANTES</center></b></font>
            <table class="table table-bordered table-striped">
                <thead>
                  <th><center>Código</center></th>
                  <th><center>N° Documento</center></th>
                  <th><center>Nombre</center></th>
                  <th><center>Teléfono</center></th>
                  <th><center>Email</center></th>
                  <th><center>Acción</center></th>
                </thead>
                <tbody>
                  @foreach($estudiantes as $estudiante)
                    <tr>
                      <td><center>{{$estudiante->codigo_estudiante}}</center></td>
                      <td><center>{{$estudiante->numero_documento}}</center></td>
                      <td>{{$estudiante->full_name}}</td>
                      <td><center>{{$estudiante->telefono}}</center></td>
                      <td>{{$estudiante->email}}</td>
                      <td>
                        <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row form-group">
                <div class="col-md-3">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Agregar</button>
                </div>
              </div>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
      <button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><i class="fa fa-file-pdf-o"></i> PDF</button>|<button id="button-excel" class="btn"><i class="fa fa-file-excel-o"></i> Excel</button>
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection
@section('scripts')
  <script type="text/javascript">
  $(document).ready(function () {
           $("#button-excel").click(function(e) {
            $("#example3").table2excel({
          exclude: ".noExl",
          name: "Excel Document Name"
         });
       });
       $('#select_proyecto').select2({
        width : '50%',
        display: 'inline-block',
        minimumInputLength: '1'
       });
       $.fn.modal.Constructor.prototype.enforceFocus = function () {};

           $('#select_estudiante').select2({
            width : '50%',
            display: 'inline-block',
            minimumInputLength: '1'
           });
           $.fn.modal.Constructor.prototype.enforceFocus = function () {};
    });
  </script>
@endsection
