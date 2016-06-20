@extends('layaouts.tablas')
@section('scripts')
    {!! Html::script('assets/js/base/profesor_modal.js') !!}
    {!! Html::script('assets/js/base/estudiante_modal.js') !!}
    {!! Html::script('assets/js/base/persona_externo_modal.js') !!}
@endsection
@section('content')
  <section class="content">
    @include('componentes.opcion_grado_proyeccion.partials.modal_sustentacion')
    @include('componentes.opcion_grado_proyeccion.partials.modal_borrarSustentacion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
          </div><!-- /.box-header -->
            @include('layaouts.partials.mensaje')

            <div class="box box-danger">
              <div class="box-body">
                <div class="row text-center">
                  <div class="col-xs-4">
                    {!!Form::label('título EPPS')!!}<br>
                    {{$opciongrado->descripcion}}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('director')!!}<br>
                    {{isset($opciongrado->director->nombre) ? $opciongrado->director->nombre : 'No registra'}}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('coordinador externo')!!}<br>
                    {{isset($opciongrado->coordinadorExterno->nombre_externo) ? $opciongrado->coordinadorExterno->nombre_externo : 'No registra'}}
                  </div>
                </div>
              </div>
            </div>

            <div class="box box-danger">
              <div class="box-body">
                <div class="row text-center">
                  <div class="col-xs-6">
                    {!!Form::label('entrega al centro de P.S')!!}<br>
                    {{$opciongrado->fecha_entrega_ci}}
                  </div>
                  <div class="col-xs-6">
                    {!!Form::label('fecha máxima de entrega')!!}<br>
                    {{$opciongrado->fecha_entrega_max_proyecto}}
                  </div>
                </div>
              </div>
            </div>
            
            <!--Participantes-->
          <div class="box box-solid box-danger">
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
                          <th>Código</th>
                          <th>N° Documento</th>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>Email</th>
                          <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach($estudiantes as $estudiante)
                          <tr>
                            <td>{{$estudiante->codigo_estudiante}}</td>
                            <td>{{$estudiante->numero_documento}}</td>
                            <td>{{ucwords($estudiante->nombre_estudiante)}}</td>
                            <td>{{$estudiante->telefono}}</td>
                            <td>{{$estudiante->email}}</td>
                            <td>
                            <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $estudiante->sustentacion !!}').modal();">Borrar</button>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                    </table>
                    </div>                    
              </div>
            </div>
           </div><!--Cierra participantes-->
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection