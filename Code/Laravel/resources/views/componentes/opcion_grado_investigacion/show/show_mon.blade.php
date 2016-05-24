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
             <table class="table text-center">
              <thead>
                <th>Descripción</th>
                <th>Director</th>
                <th>Jurado</th>
                <th>Entidad</th>
              </thead>
              <tbody>
                <td>{{$opciongrado->descripcion}}</td>               
                <td>{{$director->nombre_director}}</td>
                <td>{{$supervisor->nombre_supervisor}}</td>
                <td>{{isset($entidad) ? $entidad->nombre_entidad : 'No Registra'}}</td>
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
             
              </tbody>
            </table>
            <hr>
            <font size="4px"><b><center>INFORME</center></b></font><hr>

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
             
             </tbody>
           </table><hr>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Agregar</button>
              </div>
            </div>
            {!! Form::open(['id' => 'form1', 'style' => 'display:none', 'name' => 'form1']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" id="id_opcion_grado" value="">
            {!! Form::text('id_estudiante', null, ['id' => 'id_estudiante', 'class'=>'form-control', 'placeholder'=>'Id Estudiante','required'])!!}
              </br>
            
            {!! Form::close() !!}
            </br>
            <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <th><center>Código</center></th>
                  <th><center>N° Documento</center></th>
                  <th><center>Nombre</center></th>
                  <th><center>Teléfono</center></th>
                  <th><center>Email</center></th>
                  <th><center>Acción</center></th>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
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
