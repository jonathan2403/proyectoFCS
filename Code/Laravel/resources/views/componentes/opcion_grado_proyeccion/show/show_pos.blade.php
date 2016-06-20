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
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">

          <div class="box box-danger">
            <div class="box-body">
              <div class="row text-center">
                <div class="col-xs-6">
                  {!!Form::label('nombre del posgrado')!!}<br>
                  {{ucfirst($opciongrado->descripcion)}}
                </div>
                <div class="col-xs-6">
                  {!!Form::label('director del posgrado')!!}<br>
                  {{ucfirst($opciongrado->director->nombre)}}
                </div>
              </div><br>
              <div class="row">
                <div class="col-xs-3">
                  {!!Form::label('convenio')!!}<br>
                  {{isset($opciongrado->nombre_entidad) ? $opciongrado->nombre_entidad: 'No Registra'}}
                </div>
                <div class="col-xs-3">
                  {!!Form::label('inicio del posgrado')!!}<br>
                  {{$opciongrado->fecha_entrega_1}}  {{empty($opciongrado->numero_acta_2) ? '' : '- Acta: '.$opciongrado->numero_acta_2}}
                </div>
                <div class="col-xs-3">
                  {!!Form::label('fin del posgrado')!!}<br>
                  {{$opciongrado->fecha_entrega_2}}  {{empty($opciongrado->numero_acta_3) ? '' : '- Acta: '.$opciongrado->numero_acta_3}}
                </div>
                <div class="col-xs-3">
                  {!!Form::label('nota')!!}<br>
                  {{$opciongrado->nota}}
                </div>
              </div>
            </div>
          </div>
            
          </div><!-- /.box-header -->
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
</section><!-- /.conten-->
@endsection