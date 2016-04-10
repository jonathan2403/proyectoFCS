@extends('layaouts.tablas')
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('.picker').datepicker({
      format: "dd-mm-yyyy"
    });
    $('.select').select2({
      minimumInputLength : '2'
    });
    $('input').iCheck({
     checkboxClass: 'icheckbox_minimal',
     radioClass: 'iradio_minimal-red'
    });
    $('.picker').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
  });
</script>
@endsection
@section('content')
  <section class="content">
    <div class="row">
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Opcion de Grado</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($opciongrado,$route)!!}
                       @if($opciongrado->tipo_opcion_grado == 'Pasantía')
                          @include('componentes.opcion_grado_proyeccion.crear.pas_form')
                       @endif
                       @if($opciongrado->tipo_opcion_grado == 'EPPS')
                          @include('componentes.opcion_grado_proyeccion.crear.epps_form')
                       @endif
                       @if($opciongrado->tipo_opcion_grado == 'Posgrado')
                          @include('componentes.opcion_grado_proyeccion.crear.pos_form')
                       @endif
                      {!! Form::submit('Editar',['class'=>'btn btn-danger']) !!}
                      {!!Form::close()!!}
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection
