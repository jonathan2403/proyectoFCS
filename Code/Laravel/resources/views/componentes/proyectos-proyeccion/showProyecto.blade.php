@extends('layaouts.tablas')
@section('scripts')
 {!!Html::script('/assets/js/load_modal.js')!!}
 {!!Html::script('/assets/js/base/participacion_proyecto.js')!!}
@endsection
@section('content')
  <section class="content">

@include('componentes.proyectos-proyeccion.partials.modal_participacion')
 @include('componentes.proyectos-proyeccion.partials.modal_borrarParticipacion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">            
          <font size="5">{{$proyecto->titulo_proyecto}}</font>
           <hr>
            @include('layaouts.partials.mensaje')
            <table class="table text-center">
              <thead>
                <th>Avance</th>
                <th>Informe Final</th>
                <th>Prórroga</th>
                <th>Valor</th>
                <th>Beneficiados</th>
              </thead>
              <tbody>
                <td>{{ $proyecto->fecha_avance1 }}</td>
                <td>{{ $proyecto->fecha_informe_final }}</td>
                <td>{{ $proyecto->fecha_prorroga }}</td>
                <td>{{ $proyecto->valor_efectivo }}</td>
                <td>{{ $proyecto->beneficiados }}</td>
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
          <table class="table table-bordered">
     <thead>
      <th><center><font size="4px">Participación UNILLANOS</font></center></th>
      <th><center><font size="4px">Participación Sectorial</font></center></th>
      <th><center><font size="4px">Rangos Edades</font></center></th>
      <th><center><font size="4px">Participación por Genero</font></center></th>
     </thead>
     <tbody>
      <tr>
       <td><center>
        <dl class="dl-horizontal" style="font-size:15px">
         <dt>Administrativos </dt>
         <dd>{{ $proyecto->beneficiados_administrativos }}</dd>
         <dt>Estudiantes </dt>
         <dd>{{ $proyecto->beneficiados_estudiantes }}</dd>
         <dt>Egresados </dt>
         <dd>{{ $proyecto->beneficiados_egresado }}</dd>
         <dt>Docentes</dt>
         <dd>{{ $proyecto->beneficiados_docentes }}</dd>
        </dl></center>
       </td>
       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Sector Público </dt>
        <dd>{{ $proyecto->beneficiados_publico }}</dd>
        <dt>Sector Privado </dt>
        <dd>{{ $proyecto->beneficiados_privado }}</dd>
        <dt>Público en General </dt>
        <dd>{{ $proyecto->beneficiados_general }}</dd>
         <dt>Academia </dt>
        <dd>{{ $proyecto->beneficiados_general }}</dd>
         <dt>Alianza Sectorial </dt>
        <dd>{{ $proyecto->beneficiados_general }}</dd>
         <dt>Sociedad civil Organizada</dt>
        <dd>{{ $proyecto->beneficiados_general }}</dd>
        <dt>Otros</dt>
        <dd>{{ $proyecto->beneficiados_general }}</dd>
       </dl></center>
       </td>
       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>0 - 10 años </dt>
        <dd>{{ $proyecto->beneficiados_0_10 }}</dd>
        <dt>11 - 20 años </dt>
        <dd>{{ $proyecto->beneficiados_11_20 }}</dd>
        <dt>21 - 30 años </dt>
        <dd>{{ $proyecto->beneficiados_21_30 }}</dd>
        <dt>31 - 60 años</dt>
        <dd>{{ $proyecto->beneficiados_31_60 }}</dd>
        <dt>Mayores de 60 años</dt>
        <dd>{{ $proyecto->beneficiados_mayores_60 }}</dd>
       </dl></center>
       </td>

       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Hombres </dt>
        <dd>{{ $proyecto->beneficiados_0_10 }}</dd>
        <dt>Mujeres </dt>
        <dd>{{ $proyecto->beneficiados_11_20 }}</dd>
        
       </dl></center>
       </td>
      </tr>
     </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->

    
    <hr>
    
    <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                {!!Form::select('tipo_participante', ['e' => 'Estudiante', 'p' => 'Profesor'], null, ['id' => 'tipo_participante', 'class' => 'form-control'])!!}
              </div>
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Coinvestigador</button>
              </div>
            </div>
            <div id="dvData">
               <table  class="table table-bordered tabletex">
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
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection