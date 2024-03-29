@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('/assets/js/load_modal.js')!!}
{!!Html::script('/assets/js/base/participacion.js')!!}
{!!Html::script('/assets/js/base/estudiante_modal.js')!!}
{!!Html::script('/assets/js/base/profesor_modal.js')!!}
{!!Html::script('/assets/js/base/persona_externo_modal.js')!!}
@endsection
@section('content')
<section class="content">
 @include('componentes.eventos.partials.modal_borrarAsistencia')
 @include('componentes.eventos.partials.modal_asistencia')
 <div class="row">
  <div class="col-xs-11">
   <div class="box">
    <div class="box-header">
     @include('layaouts.partials.mensaje')
     <table class="table">
      <thead>
       <th>Nombre Evento</th>
       <th><center>Valor Efectivo</center></th>
       <th><center>Horas Certificadas</center></th>
       <th><center>Beneficiados</center></th>
     </thead>
     <tbody>
       <td>{{ ucfirst($evento->nombre_evento) }}</td>
       <td><center>{{ $evento->valor_efectivo }}</center></td>
       <td><center>{{ $evento->horas_certificadas }}</center></td>
       <td><center>{{ $evento->beneficiados }}</center></td>
     </tbody>
   </table>
 </div><!-- /.box-header -->

 <div class="box box-danger direct-chat direct-chat-warning collapsed-box">
  <div class="box-header with-border">
    <h3 class="box-title">Beneficiados</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    </div>
  </div>
  <div class="box-body" style="display:none;">
    <table class="table">
     <thead>
      <th><center>Participación UNILLANOS</center></th>
      <th><center>Participación Sectorial</center></th>
      <th><center>Rangos Edades</center></th>
      <th><center>Participación por Genero</center></th>
    </thead>
    <tbody>
      <tr>
       <td><center>
        <dl class="dl-horizontal">
         <dt>Administrativos </dt>
         <dd>{{ $evento->beneficiados_administrativos }}</dd>
         <dt>Estudiantes </dt>
         <dd>{{ $evento->beneficiados_estudiantes }}</dd>
         <dt>Egresados </dt>
         <dd>{{ $evento->beneficiados_egresado }}</dd>
         <dt>Docentes</dt>
         <dd>{{ $evento->beneficiados_docentes }}</dd>
       </dl></center>
     </td>
     <td><center>
       <dl class="dl-horizontal">
        <dt>Sector Público </dt>
        <dd>{{ $evento->beneficiados_publico }}</dd>
        <dt>Sector Privado </dt>
        <dd>{{ $evento->beneficiados_privado }}</dd>
        <dt>Público en General </dt>
        <dd>{{ $evento->beneficiados_general }}</dd>
        <dt>Academia </dt>
        <dd>{{ $evento->beneficiados_general }}</dd>
        <dt>Alianza Sectorial </dt>
        <dd>{{ $evento->beneficiados_general }}</dd>
        <dt>Sociedad civil Organizada</dt>
        <dd>{{ $evento->beneficiados_general }}</dd>
        <dt>Otros</dt>
        <dd>{{ $evento->beneficiados_general }}</dd>
      </dl></center>
    </td>
    <td><center>
     <dl class="dl-horizontal">
      <dt>0 - 10 años </dt>
      <dd>{{ $evento->beneficiados_0_10 }}</dd>
      <dt>11 - 20 años </dt>
      <dd>{{ $evento->beneficiados_11_20 }}</dd>
      <dt>21 - 30 años </dt>
      <dd>{{ $evento->beneficiados_21_30 }}</dd>
      <dt>31 - 60 años</dt>
      <dd>{{ $evento->beneficiados_31_60 }}</dd>
      <dt>Mayores de 60 años</dt>
      <dd>{{ $evento->beneficiados_mayores_60 }}</dd>
    </dl></center>
  </td>

  <td><center>
   <dl class="dl-horizontal">
    <dt>Hombres </dt>
    <dd>{{ $evento->beneficiados_hombres }}</dd>
    <dt>Mujeres </dt>
    <dd>{{ $evento->beneficiados_mujeres }}</dd>
  </dl></center>
</td>
</tr>
</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->

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
      {!!Form::select('tipo_participante', ['es' => 'Estudiante', 'p' => 'Profesor', 'ex' => 'Externo'], null, ['class' => 'form-control', 'id' => 'tipo_participante', 'title' => 'Seleccione tipo de participante.'])!!}
    </div>
    <div class="col-md-3">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Nuevo</button>
    </div>
  </div>
  @include('errors.partials.requesterror')
<div id="dvData">
  <table class="table table-bordered table-striped text-center">
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
     <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $profesor->id !!}').modal();">Borrar</button>
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
   <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button>
  </td>
  </tr>
  @endforeach
  @foreach($externos as $externo)
    <tr>
     <td></td>
     <td>{{ucwords($externo->nombre_externo)}}</td>
     <td>Externo</td>
     <td>{{$externo->telefono}}</td>
     <td>{{$externo->correo}}</td>
     <td>
      <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $externo->id !!}').modal();">Borrar</button>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div><!--cierra box body participantes-->
</div><!--cierra box pane-->


</div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.col -->

</div><!-- /.row -->
</section><!-- /.content -->
@endsection
