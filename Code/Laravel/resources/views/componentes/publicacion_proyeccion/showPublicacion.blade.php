@extends('layaouts.tablas')
@section('content')
  <section class="content">

    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <table class="table">
              <thead>
                <th>Título</th>
                <th>Grupo</th>
                <th>Opcion Grado</th>
                <th>Proyecto</th>
              </thead>
              <tbody>
                 <td>{{ucfirst($publicaciones[0]->descripcion)}}</td>
                 <td>{{ucfirst($publicaciones[0]->sigla)}}</td>
                 @if(empty($opcion_grado[0]->descripcion))
                 <td>No Registra</td>
                 @else
                 <td>{{ucfirst($opcion_grado[0]->descripcion)}}</td>
                 @endif
                 <td>{{ucfirst($proyecto[0]->titulo_proyecto)}}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Coinvestigador</button>
              </div>
            </div>
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
              <p>Por favor corrige errores</p>
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
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
