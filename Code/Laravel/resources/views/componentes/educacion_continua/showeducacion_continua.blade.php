@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('/assets/js/load_modal.js')!!}
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
          <table class="table">
            <thead>
              <th>Nombre</th>
              <th>Área de Conocimiento</th>
              <th><center>Fecha de Inicio</center></th>
              <th><center>Departamento</center></th>
              <th><center>Ciudad</center></th>
            </thead>
            <tbody>
             <td>{{ ucfirst(strtolower($edus[0]->nombre)) }}</td>
             <td><center>{{ ucfirst(strtolower($edus[0]->area_conocimiento)) }}</center></td>
             <td><center>{{ $edus[0]->fecha_inicio }}</center></td>
             <td><center>{{ ucfirst(strtolower($edus[0]->departamento)) }}</center></td>
             <td><center>{{ ucfirst(strtolower($edus[0]->ciudad)) }}</center></td>
           </tbody>
         </table>
         <div class="box box-danger direct-chat direct-chat-warning collapsed-box">
         <div class="box-header with-border">
          <h3 class="box-title">Fuentes de Financiacións</h3>
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
               <dd>{{ $edus[0]->recurso_humano }}</dd>
               <dt>Compra de Muebles y Equipos </dt>
               <dd>{{ $edus[0]->muebles_equipo }}</dd>
               <dt>Servicios </dt>
               <dd>{{ $edus[0]->servicios }}</dd>
             </dl></center>
           </td>
           <td><center>
             <dl class="dl-horizontal">
              <dt>Material Bibliografico y Papeleria </dt>
              <dd>{{ $edus[0]->material }}</dd>
              <dt>Gastos de Viaje </dt>
              <dd>{{ $edus[0]->gastos_viaje }}</dd>
              <dt>Otros Gastos </dt>
              <dd>{{ $edus[0]->otros_gastos }}</dd>
            </dl></center>
          </td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.box-header -->
<div class="box-body">
  <div class="row form-group">
    <div class="col-md-3">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Coinvestigador</button>
    </div>
  </div>
  @if($errors->any())
  <div class="alert alert-danger" role="alert">
    <p>Por favor corrige errores</p>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div id="dvData">
   <table  class="table table-bordered table-striped">
    <thead>
      <th><center>Cédula</center></th>
      <th><center>Nombre</center></th>
      <th><center>Tipo</center></th>
      <th><center>Teléfono</center></th>
      <th><center>Email</center></th>
      <th><center>Acción</center></th>
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
          <center><button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $profesor->id !!}').modal();">Borrar</button></center>
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
          <center><button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button></center>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div><!-- /.box-header -->

</div><!-- /.box-body -->
</div><!-- /.box -->

</section><!-- /.content -->
@endsection
