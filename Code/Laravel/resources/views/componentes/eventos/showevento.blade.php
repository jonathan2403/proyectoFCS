@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('/assets/js/load_modal.js')!!}
<script type="text/javascript">
  $(document).ready(function(){
    $('#div_profesor').hide();
    $('#div_externo').hide();
  });
  $('#tipo_participante').change(function(){
     if($('#tipo_participante').val() == 'p'){
      $('#div_estudiante').hide();
      $('#div_externo').hide(); 
      $('#div_profesor').show();
     }
     if($('#tipo_participante').val() == 'es'){
      $('#div_estudiante').show();
      $('#div_profesor').hide();
      $('#div_externo').hide();
     }
     if($('#tipo_participante').val() == 'ex'){
      $('#div_estudiante').hide();
      $('#div_profesor').hide();
      $('#div_externo').show();
     }
  });
</script>
@endsection
@section('content')
<section class="content">
 @include('componentes.eventos.partials.modal_borrarAsistencia')
 @include('componentes.eventos.partials.modal_asistencia')
 @include('componentes.eventos.partials.modal_borrarEstudiante')
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
       <td>{{ ucfirst(strtolower($eventos[0]->nombre_evento)) }}</td>
       <td><center>{{ $eventos[0]->valor_efectivo }}</center></td>
       <td><center>{{ $eventos[0]->horas_certificadas }}</center></td>
       <td><center>{{ $eventos[0]->beneficiados }}</center></td>
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
         <dd>{{ $eventos[0]->beneficiados_administrativos }}</dd>
         <dt>Estudiantes </dt>
         <dd>{{ $eventos[0]->beneficiados_estudiantes }}</dd>
         <dt>Egresados </dt>
         <dd>{{ $eventos[0]->beneficiados_egresado }}</dd>
         <dt>Docentes</dt>
         <dd>{{ $eventos[0]->beneficiados_docentes }}</dd>
       </dl></center>
     </td>
     <td><center>
       <dl class="dl-horizontal">
        <dt>Sector Público </dt>
        <dd>{{ $eventos[0]->beneficiados_publico }}</dd>
        <dt>Sector Privado </dt>
        <dd>{{ $eventos[0]->beneficiados_privado }}</dd>
        <dt>Público en General </dt>
        <dd>{{ $eventos[0]->beneficiados_general }}</dd>
        <dt>Academia </dt>
        <dd>{{ $eventos[0]->beneficiados_general }}</dd>
        <dt>Alianza Sectorial </dt>
        <dd>{{ $eventos[0]->beneficiados_general }}</dd>
        <dt>Sociedad civil Organizada</dt>
        <dd>{{ $eventos[0]->beneficiados_general }}</dd>
        <dt>Otros</dt>
        <dd>{{ $eventos[0]->beneficiados_general }}</dd>
      </dl></center>
    </td>
    <td><center>
     <dl class="dl-horizontal">
      <dt>0 - 10 años </dt>
      <dd>{{ $eventos[0]->beneficiados_0_10 }}</dd>
      <dt>11 - 20 años </dt>
      <dd>{{ $eventos[0]->beneficiados_11_20 }}</dd>
      <dt>21 - 30 años </dt>
      <dd>{{ $eventos[0]->beneficiados_21_30 }}</dd>
      <dt>31 - 60 años</dt>
      <dd>{{ $eventos[0]->beneficiados_31_60 }}</dd>
      <dt>Mayores de 60 años</dt>
      <dd>{{ $eventos[0]->beneficiados_mayores_60 }}</dd>
    </dl></center>
  </td>

  <td><center>
   <dl class="dl-horizontal">
    <dt>Hombres </dt>
    <dd>{{ $eventos[0]->beneficiados_hombres }}</dd>
    <dt>Mujeres </dt>
    <dd>{{ $eventos[0]->beneficiados_mujeres }}</dd>
  </dl></center>
</td>
</tr>
</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->

<div class="box box-danger">
<div class="box-body">
 <div class="row form-group">
  <div class="col-md-12">
  {!! Form::open(['route' => 'asistencia.store', 'method' => 'POST']) !!}
  {!!Form::hidden('id_evento', $eventos[0]->id)!!}
  <div class="col-md-2">
    {!!Form::select('tipo_participante', ['es' => 'Estudiante', 'p' => 'Profesor', 'ex' => 'Externo'], null, ['class' => 'form-control', 'id' => 'tipo_participante'])!!}
  </div>
  <div id="div_estudiante" class="col-md-4">
    {!! Form::select('id_estudiante', $nombre_estudiante->toArray(), null, ['class' => 'form-control select']) !!}
  </div>
  <div id="div_profesor" class="col-md-4">
    {!! Form::select('id_profesor', $nombre_profesor->toArray(), null, ['class' => 'form-control select']) !!}
  </div>
  <div id="div_externo" class="col-md-4">
    {!! Form::select('id_externo', $nombre_externo->toArray(), null, ['class' => 'form-control select']) !!}
  </div>
  <button type="submit" class="btn btn-success">Registrar</button>
  {!! Form::close() !!}
 </div>
</div>
  @include('errors.partials.requesterror')
<div id="dvData">
  <table class="table table-bordered table-striped">
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
     <td><center>{{$profesor->cedula}}</center></td>
     <td>{{ucwords($profesor->full_name)}}</td>
     <td>Profesor</td>
     <td><center>{{$profesor->telefono}}</center></td>
     <td><center>{{$profesor->email}}</center></td>
     <td>
      <center><button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $profesor->id !!}').modal();">Borrar</button></center>
    </td>
  </tr>
  @endforeach
  @foreach($estudiantes as $estudiante)
  <tr>
   <td><center>{{$estudiante->numero_documento}}</center></td>
   <td>{{ucwords($estudiante->full_name)}}</td>
   <td>Estudiantes</td>
   <td><center>{{$estudiante->telefono}}</center></td>
   <td><center>{{$estudiante->email}}</center></td>
   <td>
    <center><button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button></center>
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
<button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><span class="glyphicon glyphicon-download"></span> PDF</button>|<button id="button-excel" class="btn"><span class="glyphicon glyphicon-download"></span> Excel</button>
</div><!-- /.row -->
</section><!-- /.content -->
@endsection