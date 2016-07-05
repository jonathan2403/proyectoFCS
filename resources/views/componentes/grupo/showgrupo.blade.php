@extends('layaouts.tablas')
@section('scripts')
  {!!Html::script('/assets/js/base/estudiante_modal.js')!!}
@endsection
@section('content')
  <section class="content">
   @include('componentes.grupo.partials.modal_adscripcion')
   @include('componentes.grupo.partials.modal_borrarAdscripcion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <table class="table text-center">
              <thead>
                <th>Sigla del Grupo</th>
                <th>Nombre del Grupo</th>
              </thead>
              <tbody>
                <td>{{ucfirst($grupo->sigla)}}</td>
                <td>{{ucfirst($grupo->descripcion)}}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Nuevo Participante</button>
              </div>
            </div>
            <div id="dvData">
               <table id="example3" class="table table-bordered text-center">
                <thead>
                  <th>N° de Documento</th>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  @foreach($estudiantes as $estudiante)
                    <tr>
                      <td>{{$estudiante->numero_documento}}</td>
                      <td><center>{{$estudiante->codigo_estudiante}}</center></td>
                      <td>{{ucwords($estudiante->full_name)}}</td>
                      <td>{{$estudiante->email}}</td>
                      <td><center>
                        <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button> </center>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection
@section('scripts')
 <script type="text/javascript">
   $(document).ready(function(){
     $('input').iCheck({
       checkboxClass: 'icheckbox_minimal',
       radioClass: 'iradio_minimal-red'
      });
     $('#select_profesor').select2({
      width : '100%',
      display: 'inline-block',
      minimumInputLength: '1'
     });
     $.fn.modal.Constructor.prototype.enforceFocus = function () {};
   });
 </script>
@endsection
