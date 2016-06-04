@extends('layaouts.tablas')
@section('scripts')
  {!!Html::script('/assets/js/load_modal.js')!!}
@endsection
@section('content')
  <section class="content">
    @include('componentes.opcion_grado_proyeccion.partials.modal_sustentacion')
    @include('componentes.opcion_grado_proyeccion.partials.modal_borrarSustentacion')
    <div class="row">
      <div class="col-xs-12">
      <div class="box">
      <div class="box-body">

          <!--Inicia tabla de datos-->
          <div class="box box-danger">
          <div class="box-body">
            <div class="row text-center">
              <div class="col-xs-3">
                {!!Form::label('Nombre Pasantía')!!}<br>
                {{ucfirst($opcion_grado->descripcion)}}
              </div>
              <div class="col-xs-3">
                {!!Form::label('Director Pasantía')!!}<br>
                {{isset($director->name_director) ? ucwords($director->name_director) : 'No Registra'}}
              </div>
              <div class="col-xs-3">
                {!!Form::label('Coordinador Externo')!!}<br>
                {{isset($externo->nombre_externo) ? ucwords($externo->nombre_externo) : 'No Registra'}}
              </div>
              <div class="col-xs-3">
                {!!Form::label('Entidad')!!}<br>
                {{isset($externo->nombre_entidad) ? ucwords($externo->nombre_entidad) : 'No Registra'}}
              </div>
            </div> 
            <hr>
            <div class="row text-center">
              <div class="col-xs-4">
              {!!Form::label('entrega informe 1')!!}<br>
              {{$opcion_grado->fecha_entrega_1}}- Acta: {{$opcion_grado->numero_acta_2}}
              </div>
              <div class="col-xs-4">
               {!!Form::label('entrega final')!!}<br>
               {{$opcion_grado->fecha_entrega_2}}- Acta: {{$opcion_grado->numero_acta_3}}
              </div>
              <div class="col-xs-4">
               {!!Form::label('concepto')!!}<br> 
               @if($opcion_grado->concepto_2=='ap')
                      <td><center>Aprobado</center></td>
                     @endif
                     @if($opcion_grado->concepto_2=='aa')
                      <td><center>Apr. con Ajustes</center></td>
                     @endif
                     @if($opcion_grado->concepto_2=='na')
                      <td><center>No Aprobado</center></td>
                @endif
              </div>
            </div>
            <hr>
            <div class="row text-center">
              <div class="col-xs-3">
                {!!Form::label('Carta Director')!!}<br>
                {{$opcion_grado->carta_director}}
              </div>
              <div class="col-xs-3">
                {!!Form::label('Carta Coordinador')!!}<br>
                {{$opcion_grado->carta_coordinador}}
              </div>
              <div class="col-xs-3">
                {!!Form::label('Evaluación')!!}<br>
                @if($opcion_grado->evaluacion=='ap')
                      Aprobado
                      @endif
                      @if($opcion_grado->evaluacion=='aa')
                      Apr. con Ajustes
                      @endif
                      @if($opcion_grado->evaluacion=='na')
                      No Aprobado
                      @endif
                      @if($opcion_grado->evaluacion=='me')
                      Meritoria
                      @endif
                      @if($opcion_grado->evaluacion=='la')
                      Laureada
                  @endif
              </div>
              <div class="col-xs-3">
                {!!Form::label('Finalizado')!!}<br>
                {{$opcion_grado->finalizado}}
              </div>
            </div> 
          </div>           
          </div>  <!-- Finaliza tabla de datos -->

          <!--Inicia Participantes-->
<div class="box box-solid box-danger">
<div class="box-header with-border">
    <h3 class="box-title">Participantes</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
</div>
<div class="box-body">
  <div class="row form-group">
    <div class="col-md-3">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Estudiante</button>
    </div>
  </div>
  <hr>
  <div id="dvData">
   <table  class="table table-striped text-center">
    <thead>
      <th>Cédula</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Email</th>
      <th>Acción</th>
    </thead>
    <tbody>
      @foreach($estudiantes as $estudiante)
      <tr>
        <td>{{$estudiante->numero_documento}}</td>
        <td>{{ucwords($estudiante->full_name)}}</td>
        <td>{{$estudiante->telefono}}</td>
        <td>{{$estudiante->email}}</td>
        <td>
          <center><button type="button" value="{{$estudiante->full_name}}" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal(this);">Borrar</button></center>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div><!-- Cierra body participantes-->

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.conten-->
@endsection
