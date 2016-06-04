@extends('layaouts.tablas')
@section('content')
  <section class="content">
  
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <table class="table text-center">
              <thead>
                <th>Título</th>
                <th>Grupo</th>
                <th>Opcion Grado</th>
                <th>Proyecto</th>
              </thead>
              <tbody>
                 <td>{{isset($publicacion) ? ucfirst($publicacion->descripcion) : 'No Registra'}}</td>
                 <td>{{isset($publicacion->sigla) ? $publicacion->sigla : 'No Registra'}}</td>
                 <td>{{isset($opcion_grado->descripcion) ? $opcion_grado->descripcion : 'No Registra'}}
                 <td>{{isset($proyecto->titulo_proyecto) ? $proyecto->titulo_proyecto : 'No Registra'}}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Coinvestigador</button>
              </div>
            </div>
            
            <div id="dvData">
               <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <th><center>Cédula</center></th>
                  <th><center>Nombre</center></th>
                  <th><center>Teléfono</center></th>
                  <th><center>Email</center></th>
                  <th><center>Acción</center></th>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
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
     $('#select_coinvestigador').select2({
      width : '100%',
      display: 'inline-block',
      minimumInputLength: '1'
     });
     $.fn.modal.Constructor.prototype.enforceFocus = function () {};
   });
 </script>
@endsection
