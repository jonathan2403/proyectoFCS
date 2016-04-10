@extends('layaouts.tablas')
@section('scripts')
    {!!Html::script('assets/js/load.js')!!}
  <script type="text/javascript">
    $(document).ready(function(){
      var id_profesor;
      $('.select').select2({
       width : '50%',
       display: 'inline-block',
       minimumInputLength: '1'
      });
      $.fn.modal.Constructor.prototype.enforceFocus = function () {};
    $("#select_profesor").change(function() {
       id_profesor = $('#select_profesor').val();
      });
    $('#text_nombre').attr('size', 30);
    $('#text_cantidad').attr('size', 3);
    $('#text_unidad').attr('size', 6);
    
    $.ajaxSetup({
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
          });
    $('#registro').click(function(){
      var row = $(this).parents('tr');
      var id_proyecto = $("#id_proyecto").val();
      //alert(id_proyecto +' '+id_profesor);
      var route = "http://localhost:8000/participacion";
      var token = $("#token").val();
      $.ajax({
        url : route,
        headers : {'X-CSRF-TOKEN' : token},
        type : "POST",
        dataType : 'json',
        data : {id_profesor : id_profesor, id_proyecto : id_proyecto},
        timeout: 3000,
        success:function(){
          $("#msj-success").fadeIn();
        }
      });
      
      $('#data').fadeOut('slow', function() {
        $(this).load('http://localhost:8000/proyectos-investigacion/1', function() {
            $(this).fadeIn('slow');
        });
    });
      //row.fadeIn();
    });
    /*$('#data').load('http://localhost:8000/proyectos-investigacion.show');
    var auto_refresh = setInterval(function () {
    $('#data').fadeOut('slow', function() {
      $('#data').load('http://localhost:8000/proyectos-investigacion.show');
        $(this).load('/echo/json/', function() {
            $(this).fadeIn('slow');
        });
    });
}, 3000);*/
    });
  </script>
@endsection
@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<section class="content">
@include('componentes.proyectos-investigacion.partials.modal_participacion')
 @include('componentes.proyectos-investigacion.partials.modal_borrarParticipacion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <table class="table">
              <thead>
                <th><font size="3px">Avance 1</font></th>
                <th><font size="3px">Avance 2</font></th>
                <th><font size="3px">Avance 3</font></th>
                <th><font size="3px">Informe Final</font></th>
                <th><font size="3px">Prórroga</font></th>
                <th><font size="3px">Valor</font></th>
                <th><font size="3px">Tipo de Beneficiado</font></th>
                <th><font size="3px">Beneficiados</font></th>
                <th><font size="3px">Poblacion Estudio</font></th>
                <th><font size="3px">Producto</font></th>
              </thead>
              <tbody>
                <td>{{ $proyectos[0]->fecha_avance1 }}</td>
                <td>{{ $proyectos[0]->fecha_avance2 }}</td>
                <td>{{ $proyectos[0]->fecha_avance3 }}</td>
                <td>{{ $proyectos[0]->fecha_informe_final }}</td>
                <td>{{ $proyectos[0]->fecha_prorroga }}</td>
                <td>{{ $proyectos[0]->valor_efectivo }}</td>
                <td>{{ $proyectos[0]->tipo_beneficiado }}</td>
                <td>{{ $proyectos[0]->beneficiados }}</td>
                <td>{{ $proyectos[0]->poblacion_estudio }}</td>
                <td>{{ $proyectos[0]->producto }}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->
          <div class="box-body">
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
              {!! Form::open() !!}
              <!--{!! Form::hidden('_token', '{{ csrf_token() }}', array('id' => 'token')) !!}
              <!--<input type="hidden" name="_token" value="{{ csrf_token() }}", id="token">-->
              {!! Form::hidden('id_proyecto', $proyectos[0]->id, ['id' => 'id_proyecto']) !!}
              {!!Form::select('id_profesor',$nombre_profesor->toArray(), null, ['id' => 'select_profesor', 'class' => 'form-control select', 'placeholder' => '']) !!}
                {!!link_to('#', $title='Registrar', $attributes=['id' => 'registro', 'class' => 'btn btn-primary btn-sm'], $secure=null)!!}
              {!! Form::close() !!}
              </br>
              
              <div id="data">
              <table  class="table table-bordered table-striped">
                <thead>
                <th>id</th>
                  <th><center><font size = "3px">Cédula</center></font></th>
                  <th><center><font size = "3px">Nombre</center></font></th>
                  <th><center><font size = "3px">Teléfono</center></font></th>
                  <th><center><font size = "3px">Email</center></font></th>
                  <th><center><font size = "3px">Acción</center></font></th>
                </thead>
                
                <tbody>
                  @foreach($profesores as $profesor)
                    <tr data-id="{{$profesor->id}}">

                      <td>{{$profesor->id}}</td>
                      <td><center>{{$profesor->cedula}}</center></td>
                      <td><?php echo ucwords($profesor->full_name);?></td>
                      <td>{{$profesor->telefono}}</td>
                      <td>{{$profesor->email}}</td>
                      <td><center>
                        <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $profesor->id !!}').modal();">Borrar</button>
                      </center></td>

                    </tr>
                  @endforeach
                </tbody>
                
              </table>
              </div>
              <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Registro Exitoso!</strong>
              </div>
              <hr>
              <!--<div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Coinvestigador</button>
              </div>-->
            </div>
              <font size="4"><b><center>Bienes Adquiridos</center></b></font><hr>
              <table  class="table table-bordered table-striped">
                <thead>
                  <th><center><font size = "3px">Nombre</center></font></th>
                  <th><center><font size = "3px">Cantidad</center></font></th>
                  <th><center><font size = "3px">Valor Unidad</center></font></th>
                </thead>
                <tbody>
                    <tr>
                    {!! Form::open(['route' => 'adquisicion.store', 'method' => 'POST']) !!}
                      {!! Form::hidden('id_proyecto', $proyectos[0]->id, ['id' => 'id_proyecto']) !!}
                       <td>
                         {!!Form::text('nombre_articulo', null, ['class'=>'form-control', 'placeholder'=>'', 'id' => 'text_nombre'])!!}
                       </td>
                      <td><center>{!!Form::text('cantidad', null, ['class'=>'form-control', 'placeholder'=>'', 'id' => 'text_cantidad'])!!}</center></td>
                      <td><center>{!!Form::text('valor_unidad', null, ['class'=>'form-control', 'placeholder'=>'', 'id' => 'text_unidad'])!!}</center></td>
                      <td><center><button type="submit" class="btn btn-success btn-sm">Registrar</button></center></td>
                    </tr>
                     {!! Form::close() !!}
                     @foreach($bienes as $bien)
                    <tr>                      
                      <td>{{$bien->nombre_articulo}}</td>
                      <td><center>{{$bien->cantidad}}</center></td>
                      <td>{{ $bien->valor_unidad }}</td>
                      <td><center>
                        <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $bien->id !!}').modal();">Borrar</button>
                      </center></td>

                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection
