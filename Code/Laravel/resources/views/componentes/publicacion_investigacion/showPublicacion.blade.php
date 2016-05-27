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
                 <td>{{$publicacion->descripcion}}</td>
                 <td>{{isset($grupo) ? $grupo->sigla : 'No Registra'}}</td>
                 <td>{{isset($opcion_grado) ? $opcion_grado->descripcion : 'No Registra'}}</td>
                 <td>{{isset($proyecto) ? $proyecto->titulo_proyecto : 'No Registra'}}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->

          <!--Participantes-->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h5 class="box-title">Participantes</h5>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-12">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Nuevo</button>
                      <hr>
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                          <th>Código</th>
                          <th>N° Documento</th>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>Email</th>
                          <th>Acción</th>
                        </thead>
                        <tbody>
                        
                    </table>
                    </div>     
              </div>
            </div>
          </div>
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection