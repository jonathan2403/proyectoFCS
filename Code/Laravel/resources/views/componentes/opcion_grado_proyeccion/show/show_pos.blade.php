@extends('layaouts.tablas')
@section('scripts')
    {!! Html::script('assets/js/base/profesor_modal.js') !!}
    {!! Html::script('assets/js/base/estudiante_modal.js') !!}
    {!! Html::script('assets/js/base/persona_externo_modal.js') !!}
@endsection
@section('content')
  <section class="content">
    @include('componentes.opcion_grado_investigacion.partials.modal_sustentacion')
    @include('componentes.opcion_grado_investigacion.partials.modal_borrarSustentacion')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">

            <table class="table">
              <thead>
                <th>Nombre Del Posgrado</th>
                <th>Director Posgrado</th>

              </thead>
              <tbody>
                <td>{{ucfirst($opcion_grados[0]->descripcion)}}</td>
                <td>{{ucwords($director[0]->name_director)}}</td>

              </tbody>
            </table>
            <table class="table">
              <thead>
                <th><center>Convenio</center></th>
                <th><center>Inicio Posgrado</center></th>
                <th><center>Fin Posgrado</center></th>
                <th><center>Nota</center></th>
              </thead>
              <tbody>
                @if(empty($entidad))
                  <td>No Registra</td>
                @else
                  <td>{{ucfirst($entidad[0]->nombre_entidad)}}</td>
                @endif
                  <td><center>{{$opcion_grados[0]->fecha_entrega_1}}- Acta: {{$opcion_grados[0]->numero_acta_2}} </center></td>
                  <td><center>{{$opcion_grados[0]->fecha_entrega_2}}- Acta: {{$opcion_grados[0]->numero_acta_3}}</center></td>
                  <td><center>{{$opcion_grados[0]->numero_acta}}</center></td>

              </tbody>
            </table>
          </div><!-- /.box-header -->
          {!! Form::open(['id' => 'form1', 'style' => 'display:none', 'name' => 'form1']) !!}
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
          <input type="hidden" id="id_opcion_grado" value="{{$opcion_grados[0]->id}}">
          {!! Form::text('id_estudiante', null, ['id' => 'id_estudiante', 'class'=>'form-control', 'placeholder'=>'Id Estudiante','required'])!!}
            </br>
          {!! link_to('opcion-grado/'.$opcion_grados[0]->id, $title="Registrar", $attributes=['id' => 'registro', 'class' => 'btn btn-primary'], $secure = null) !!}
          {!! Form::close() !!}
          <font size="4"><b><center>Participantes</center></b></font><hr>
          <table class="table table-bordered table-striped">
              <thead>
                <th><center>Código</center></th>
                <th><center>Nombre</center></th>
                <th><center>Telefono</center></th>
                <th><center>Email</center></th>
                <th><center>Acción</center></th>
              </thead>
              <tbody>
                @foreach($estudiantes as $estudiante)
                  <tr>
                    <td><center>{{$estudiante->codigo_estudiante}}</center></td>
                    <td>{{ucwords($estudiante->full_name)}}</td>
                    <td><center>{{$estudiante->telefono}}</center></td>
                    <td><center>{{$estudiante->email}}</center></td>
                    <td><center>
                      <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button>
                    </center></td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            <div class="box-body">
              <div class="row form-group">
                <div class="col-md-3">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Estudiante</button>
                </div>
              </div>
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
    <button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><i class="fa fa-file-pdf-o"></i> PDF</button>|<button id="button-excel" class="btn"><i class="fa fa-file-excel-o"></i> Excel</button>
  </div><!-- /.row -->
</section><!-- /.conten
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
