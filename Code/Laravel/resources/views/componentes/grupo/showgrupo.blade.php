@extends('layaouts.tablas')
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
                <td>{{ucfirst($grupos[0]->sigla)}}</td>
                <td>{{ucfirst($grupos[0]->descripcion)}}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Registrar Estudiante</button>
              </div>
            </div>
            <div id="dvData">
               <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  @foreach($estudiantes as $estudiante)
                    <tr>
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