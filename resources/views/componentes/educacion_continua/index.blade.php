@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('/assets/js/load_views.js')!!}
{!!Html::script('/assets/js/componentes/educacionContinua/reporteEducacionContinua.js')!!}
<script type="text/javascript">

  // configura datepicker
  $.datepicker.setDefaults($.datepicker.regional['es']);
  $(".date_picker").datepicker();

  // click descargar reporte
  
    $("form_reporte").submit(function( event ) {
      alert( "Handler for .submit() called." );
      event.preventDefault();
      var fecha_desde = new Date($("#from").val());
      var fecha_hasta = new Date($("#to").val());
      alert(valida_fechas(fecha_desde, fecha_hasta));
      if(valida_fechas(fecha_desde, fecha_hasta)){
        $("form_reporte").submit(function( event ) {
          alert( "Handler for .submit() called." );
          event.preventDefault();
      });
      }else{
        muestra_error();  
      }
      });

  // función valida fechas return true si pasó la validación, false muestra error
  function valida_fechas(fecha_desde, fecha_hasta){
      if(fecha_hasta < fecha_desde)
        return false;
      else
        return true;
  }

  function muestra_error(){
    $("#msg_error").slideDown(function(){
      setTimeout(function(){
        $("#msg_error").slideUp();
      }, 2000);
    });
  }
</script>
@endsection
@section('content')
  <section class="content">
    <div class="row">
    
      <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <div id="msg_error" style="display:none">
              <p>Mesaje de Error</p>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
          <div class="pull-right">
          <button id="btn_reporte" onclick="mostrarFechas()" class="btn btn-default"><i class="fa fa-download" aria-hidden="true"></i> Reporte</button>
          <div class="row text-right" id="div_fechas" style="display:none">
          <form id="form_reporte" class="formulario_validado" action="/exportar/excel/educacion-continua" method="GET">
          <div class="col-xs-4 text-center">
              <input type="text" id="from" name="from" class="form-control date_picker" placeholder="DD/MM/AAAA">
          </div>
          <div class="col-xs-4 text-center">
              <input type="text" id="to" name="to" class="form-control date_picker" placeholder="DD/MM/AAAA">
          </div>
          <div class="col-xs-4">
            <input type="submit" name="" class="btn btn-default" value="Descargar">
            <button type="button" id="btn_cerrar_fechas" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
          </div>
          </form>
          </div>
          </div>
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('educacion-continua/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Registro</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Nombre</th>
                <th>Director</th>
                <th>Aprobación</th>
                <th>País</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($edus as $edu)
                  <tr>
                    <td>{!! link_to_route('educacion-continua.show', ucfirst($edu->nombre), $parameters=$edu->id) !!}</td>
                    <td>{{ $edu->director->nombre}}</td>
                    <td>{{ $edu->fecha_aprobacion }} - Acta: {{ $edu->numero_acta }}</td>
                    @if($edu->contexto == 'n')
                    <td>Colombia</td>
                    @else
                    <td>{{ucwords($edu->pais)}}</td>
                    @endif
                    <td>
                      {!! link_to_route('educacion-continua.edit', $title='Editar', $parameters=$edu->id, ['class'=>'btn btn-warning btn-sm']) !!}|<a href="{{URL::to('educacion/continua/'.$edu->id)}}" class="btn btn-danger btn-sm">Borrar</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>
  </section><!-- /.content -->
@endsection