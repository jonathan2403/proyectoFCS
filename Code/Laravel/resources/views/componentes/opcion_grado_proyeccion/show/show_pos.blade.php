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
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Estudiante</button>
                      <hr>
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                          <th>N° de Documento</th>
                          <th>Código</th>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>Email</th>
                          <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach($sustentaciones as $sustentacion)
                          <tr>
                            <td>{{$sustentacion->estudiante->numero_documento}}</td>
                            <td>{{$sustentacion->estudiante->codigo_estudiante}}</td>
                            <td>{{$sustentacion->estudiante->full_name}}</td>
                            <td>{{$sustentacion->estudiante->telefono}}</td>
                            <td>{{$sustentacion->estudiante->email}}</td>
                            <td>
                              <center><button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $sustentacion->id !!}').modal(this);">Borrar</button></center>
                            </td>
                          </tr>
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