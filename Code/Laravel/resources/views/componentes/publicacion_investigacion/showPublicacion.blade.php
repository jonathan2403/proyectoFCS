@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('/assets/js/base/profesor_modal.js')!!}
{!!Html::script('/assets/js/base/estudiante_modal.js')!!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            @include('componentes.publicacion_investigacion.partials.modal_publicacion')
            @include('componentes.publicacion_investigacion.partials.modal_borrarPublicacion')
            <table class="table text-center">
              <thead>
                <th>Título</th>
                <th>Grupo</th>
                <th>Opción de Grado</th>
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
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Nuevo Registro</button>
                      <hr>
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                          <th>N° Documento</th>
                          <th>Nombre</th>
                          <th>Tipo</th>
                          <th>Teléfono</th>
                          <th>Email</th>
                          <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach($profesores as $profesor)
                        <tr>
                          <td>{{$profesor->cedula}}</td>
                          <td>{{$profesor->nombre_profesor}}</td>
                          <td>Profesor</td>
                          <td>{{$profesor->telefono}}</td>
                          <td>{{$profesor->email}}</td>
                          <td><button class="btn btn-danger btn-sm" onclick="$('#modalBorrar{{$profesor->id}}').modal();">Borrar</button></td>
                        </tr>
                        @endforeach
                        @foreach($estudiantes as $estudiante)
                        <tr>
                          <td>{{$estudiante->numero_documento}}</td>
                          <td>{{$estudiante->full_name}}</td>
                          <td>Estudiante</td>
                          <td>{{$estudiante->telefono}}</td>
                          <td>{{$estudiante->email}}</td>
                          <td><button  class="btn btn-danger btn-sm" onclick="$('#modalBorrar{{$estudiante->id}}').modal();" >Borrar</button></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>     
              </div>
            </div>
          </div><!--Cierra Participantes-->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection