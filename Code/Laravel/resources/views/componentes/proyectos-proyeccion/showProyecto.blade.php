@extends('layaouts.tablas')
@section('content')
  <section class="content">

@include('componentes.proyectos-proyeccion.partials.modal_participacion')
 @include('componentes.proyectos-proyeccion.partials.modal_borrarParticipacion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
          
            
          <font size="5">{{$proyectos[0]->titulo_proyecto}}</font>
          
          <hr>
            @include('layaouts.partials.mensaje')
            <table class="table">
              <thead>
                <th>Avance</th>
                <th>Informe Final</th>
                <th>Prórroga</th>
                <th>Valor</th>
                <th>Beneficiados</th>
              </thead>
              <tbody>
                <td>{{ $proyectos[0]->fecha_avance1 }}</td>
                <td>{{ $proyectos[0]->fecha_informe_final }}</td>
                <td>{{ $proyectos[0]->fecha_prorroga }}</td>
                <td>{{ $proyectos[0]->valor_efectivo }}</td>
                <td>{{ $proyectos[0]->beneficiados }}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->

<font size="4px"><b><center>BENEFICIADOS</center></b></font>
    <hr>
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
         <dd>{{ $proyectos[0]->beneficiados_administrativos }}</dd>
         <dt>Estudiantes </dt>
         <dd>{{ $proyectos[0]->beneficiados_estudiantes }}</dd>
         <dt>Egresados </dt>
         <dd>{{ $proyectos[0]->beneficiados_egresado }}</dd>
         <dt>Docentes</dt>
         <dd>{{ $proyectos[0]->beneficiados_docentes }}</dd>
        </dl></center>
       </td>
       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Sector Público </dt>
        <dd>{{ $proyectos[0]->beneficiados_publico }}</dd>
        <dt>Sector Privado </dt>
        <dd>{{ $proyectos[0]->beneficiados_privado }}</dd>
        <dt>Público en General </dt>
        <dd>{{ $proyectos[0]->beneficiados_general }}</dd>
         <dt>Academia </dt>
        <dd>{{ $proyectos[0]->beneficiados_general }}</dd>
         <dt>Alianza Sectorial </dt>
        <dd>{{ $proyectos[0]->beneficiados_general }}</dd>
         <dt>Sociedad civil Organizada</dt>
        <dd>{{ $proyectos[0]->beneficiados_general }}</dd>
        <dt>Otros</dt>
        <dd>{{ $proyectos[0]->beneficiados_general }}</dd>
       </dl></center>
       </td>
       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>0 - 10 años </dt>
        <dd>{{ $proyectos[0]->beneficiados_0_10 }}</dd>
        <dt>11 - 20 años </dt>
        <dd>{{ $proyectos[0]->beneficiados_11_20 }}</dd>
        <dt>21 - 30 años </dt>
        <dd>{{ $proyectos[0]->beneficiados_21_30 }}</dd>
        <dt>31 - 60 años</dt>
        <dd>{{ $proyectos[0]->beneficiados_31_60 }}</dd>
        <dt>Mayores de 60 años</dt>
        <dd>{{ $proyectos[0]->beneficiados_mayores_60 }}</dd>
       </dl></center>
       </td>

       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Hombres </dt>
        <dd>{{ $proyectos[0]->beneficiados_0_10 }}</dd>
        <dt>Mujeres </dt>
        <dd>{{ $proyectos[0]->beneficiados_11_20 }}</dd>
        
       </dl></center>
       </td>
      </tr>
     </tbody>
    </table>
    <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Coinvestigador</button>
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
                        <center><button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $profesor->id !!}').modal();">Borrar</button></center>
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
                        <center><button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button></center>
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
@section('scripts')
 <script type="text/javascript">
   $(document).ready(function(){
     $('input').iCheck({
       checkboxClass: 'icheckbox_minimal',
       radioClass: 'iradio_minimal-red'
      });
     $('#select_coinvestigador').select2({
      width : '100%',
      display: 'inline-block',
      minimumInputLength: '1'
     });
     $.fn.modal.Constructor.prototype.enforceFocus = function () {};
   });
 </script>
@endsection
