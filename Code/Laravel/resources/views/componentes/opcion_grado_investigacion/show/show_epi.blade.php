@extends('layaouts.tablas')
@section('scripts')
  {!!Html::script('/assets/js/base/estudiante_modal.js')!!}
@endsection
@section('content')
  <section class="content">
    @include('componentes.opcion_grado_investigacion.partials.modal_sustentacion')
    @include('componentes.opcion_grado_investigacion.partials.modal_borrarSustentacion')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
            <table class="table text-center">
              <thead>
                <th>Descripción EPI</th>
                <th>Director</th>
                <th>Director 2</th>
                <th>Entidad</th>
              </thead>
              <tbody>
                <td>{{$opciongrado->descripcion}}</td>
                <td>{{$opciongrado->director->nombre}}</td>
                <td>{{$opciongrado->jurado->nombre}}</td>
                <td>{{isset($opciongrado->entidadexterna) ? $opciongrado->entidadexterna->nombre_externo : 'No Registra'}}</td>
              </tbody>
            </table>

            <div class="box">
              <div class="box-body">
                <div class="row text-center">
                  <div class="col-xs-4"> 
                      {!!Form::label('proyecto al que pertenece')!!}<br>
                      {{isset($opciongrado->proyecto) ? $opciongrado->proyecto->titulo_proyecto : 'No Registra'}}
                  </div>
                  <div class="col-xs-4"> 
                      {!!Form::label('línea de investigación')!!}<br>

                  </div>
                  <div class="col-xs-4"> 
                      {!!Form::label('grupo')!!}<br>
                      {{isset($grupo) ? $grupo->sigla : 'No Registra'}}
                  </div>
                </div>
                  <hr>
                  </div>
                <div class="row text-center">
                  <div class="col-xs-3">
                  {!!Form::label('Entrega C.I')!!}<br>
                  {{$opciongrado->fecha_entrega_ci}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Comite de Revisión')!!}<br>
                  {{$opciongrado->fecha_entrega_cr}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega al jurado')!!}<br>
                  {{$opciongrado->fecha_entrega_jurado}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega max. del jurado')!!}<br>
                  {{$opciongrado->fecha_entrega_max_jurado}}                    
                  </div>
                </div>
                <hr>
                  <!---->
                <div class="row text-center">
                  <div class="col-xs-3">
                  {!!Form::label('Entrega Real del Jurado')!!}<br>
                  {{$opciongrado->fecha_entrega_ci}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega 1')!!}<br>
                  {{$opciongrado->fecha_entrega_cr}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega 2')!!}<br>
                  {{$opciongrado->fecha_entrega_jurado}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega max. del proyecto')!!}<br>
                  {{$opciongrado->fecha_entrega_max_jurado}}                    
                  </div>
              </div>
              <hr>
            </div>

            <hr>
            <h4 class="text-center"><strong>INFORME</strong></h4>

            <div class="box">
              <div class="box-body">
                <div class="row text-center">
                  <div class="col-xs-4">
                    {!!Form::label('entrega informe final')!!}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('entrega informe 1')!!}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('entrega informe 2')!!}
                  </div>
                </div>
                <hr>
                <div class="row text-center">
                  <div class="col-xs-4">
                    {!!Form::label('entrega de certificado')!!}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('empaste')!!}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('evaluación')!!}
                  </div>
                </div>
                <hr>
              </div>
            </div><!--Termina box Informe-->
           
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