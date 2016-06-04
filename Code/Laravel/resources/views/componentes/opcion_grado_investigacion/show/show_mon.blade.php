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
          <div class="box-header">
             <table class="table text-center">
              <thead>
                <th>Descripción</th>
                <th>Director</th>
                <th>Jurado</th>
                <th>Entidad</th>
              </thead>
              <tbody>
                <td>{{$opciongrado->descripcion}}</td>               
                <td>{{$director->nombre_director}}</td>
                <td>{{isset($supervisor) ? $supervisor->nombre_supervisor : 'No Registra'}}</td>
                <td>{{isset($entidad) ? $entidad->nombre_entidad : 'No Registra'}}</td>
              </tbody>
            </table></br>

            <div class="box">
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-3">
                    {!!Form::label('entrega c. i.')!!}<br>
                    {{$opciongrado->fecha_entrega_ci}}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('comité de revisión')!!}<br>
                    {{$opciongrado->fecha_entrega_cr}}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('entrega al jurado')!!}<br>
                    {{$opciongrado->fecha_entrega_jurado}}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('entrega max. del jurado')!!}<br>
                    {{$opciongrado->fecha_entrega_max_jurado}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-xs-3">
                    {!!Form::label('entrega real del jurado')!!}<br>
                    {{$opciongrado->fecha_entrega_real_jurado}}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('entrega n° 1')!!}<br>
                    {{$opciongrado->fecha_entrega_1}}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('entrega n° 2')!!}<br>
                    {{$opciongrado->fecha_entrega_2}}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('entrega max. del proyecto')!!}<br>
                    {{$opciongrado->fecha_entrega_max_proyecto}}
                  </div>
                </div>
              </div>
            </div>

            <h4 class="text-center">
              <strong>INFORME</strong>
            </h4>

            <div class="box">
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-4">
                  {!!Form::label('entrega informe final')!!}<br>
                  {{$opciongrado->fecha_entrega_informe_final.' '.$opciongrado->concepto_4}}  
                  </div>
                  <div class="col-xs-4">
                  {!!Form::label('entrega informe n° 1')!!}<br>
                  {{$opciongrado->fecha_entrega_informe_2.' '.$opciongrado->concepto_5}}    
                  </div>
                  <div class="col-xs-4">
                  {!!Form::label('entrega informe n° 2')!!}<br>
                  {{$opciongrado->fecha_entrega_informe_3.' '.$opciongrado->concepto_6}} 
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                  {!!Form::label('entrega del certificado')!!}<br>
                  {{$opciongrado->fecha_entrega_certificado}}  
                  </div>
                  <div class="col-xs-4">
                  {!!Form::label('empaste')!!}<br>
                  {{$opciongrado->fecha_entrega_empaste}}    
                  </div>
                  <div class="col-xs-4">
                  {!!Form::label('evaluación')!!}<br>
                  {{$opciongrado->evaluacion}}    
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.box-header -->
          <hr>
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
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection
