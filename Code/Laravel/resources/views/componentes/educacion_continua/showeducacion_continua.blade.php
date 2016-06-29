@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('/assets/js/base/participacion.js')!!}
{!!Html::script('/assets/js/base/profesor_modal.js')!!}
{!!Html::script('/assets/js/base/estudiante_modal.js')!!}
@endsection
@section('content')
<section class="content">
  @include('componentes.educacion_continua.partials.modal_participacion')
  @include('componentes.educacion_continua.partials.modal_borrarParticipacion')
  <div class="row">
    <div class="col-xs-11">
      <div class="box">
        <div class="box-header">
          @include('layaouts.partials.mensaje')
          <table class="table text-center">
            <thead>
              <th>Nombre</th>
              <th>Área de Conocimiento</th>
              <th>Fecha de Inicio</th>
              <th>Ciudad</th>
            </thead>
            <tbody>
             <td>{{ ucfirst(strtolower($educacion_continua->nombre)) }}</td>
             <td>{{ ucfirst(strtolower($educacion_continua->area_conocimiento)) }}</td>
             <td>{{ $educacion_continua->fecha_inicio }}</td>
             @if($educacion_continua->contexto == 'n')
             <td>{{$educacion_continua->municipios->nombre}}</td>
             @else
             <td>{{ucwords($educacion_continua->ciudad)}}</td>
             @endif
           </tbody>
         </table>
         <!--Inicia fuentes de financiación-->
         <div class="box box-danger direct-chat direct-chat-warning collapsed-box">
         <div class="box-header with-border">
          <h3 class="box-title">Fuentes de Financiación</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div>
        </div>
        <div class="box-body" style="display:none;">
          <table class="table">
           <tbody>
            <tr>
             <td><center>
              <dl class="dl-horizontal">
               <dt>Recurso Humano </dt>
               <dd>{{ $educacion_continua->recurso_humano }}</dd>
               <dt title="Compra de Muebles y Equipos">Compra de Muebles y Equipos </dt>
               <dd>{{ $educacion_continua->muebles_equipo }}</dd>
               <dt>Servicios </dt>
               <dd>{{ $educacion_continua->servicios }}</dd>
             </dl></center>
           </td>
           <td><center>
             <dl class="dl-horizontal">
              <dt title="Material Bibliográfico y Papelería">Material Bibliográfico y Papelería </dt>
              <dd>{{ $educacion_continua->material }}</dd>
              <dt>Gastos de Viaje </dt>
              <dd>{{ $educacion_continua->gastos_viaje }}</dd>
              <dt>Otros Gastos </dt>
              <dd>{{ $educacion_continua->otros_gastos }}</dd>
            </dl></center>
          </td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- termina fuentes de financiacion-->
</div><!-- /.box-header -->

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
    <div class="col-xs-3">
      {!!Form::select('tipo_participante', ['es' => 'Estudiante', 'p' => 'Profesor'], null, ['id' => 'tipo_participante', 'class' => 'form-control', 'title' => 'Seleccione tipo de participante.'])!!}
    </div>
    <div class="col-md-3">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Coinvestigador</button>
    </div>
  </div>
  <div id="dvData">

   <table  class="table table-striped text-center">
    <thead>
      <th>Cédula</th>
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
        <td>{{ucwords($profesor->full_name)}}</td>
        <td>Profesor</td>
        <td>{{$profesor->telefono}}</td>
        <td>{{$profesor->email}}</td>
        <td>
          <center><button type="button" value="{{$profesor->full_name}}" class="btn btn-danger btn-sm" onclick="$('#modalBorrarParticipacion{!! $profesor->id !!}').modal(this);">Borrar</button></center>
        </td>
      </tr>
      @endforeach
      @foreach($estudiantes as $estudiante)
      <tr>
        <td>{{$estudiante->numero_documento}}</td>
        <td>{{ucwords($estudiante->full_name)}}</td>
        <td>Estudiante</td>
        <td>{{$estudiante->telefono}}</td>
        <td>{{$estudiante->email}}</td>
        <td>
          <center><button type="button" value="{{$estudiante->full_name}}" class="btn btn-danger btn-sm" onclick="$('#modalBorrarParticipacion{!! $estudiante->id !!}').modal(this);">Borrar</button></center>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div><!-- Cierra body participantes-->

</div>
</div><!-- /.box -->
</div><!-- col-xs-11 -->
</div><!-- row -->
</section><!-- /.content -->
@endsection
