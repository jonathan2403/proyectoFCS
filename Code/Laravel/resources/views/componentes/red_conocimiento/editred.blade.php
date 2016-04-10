@extends('layaouts.tablas')
@section('scripts')
<script type="text/javascript">
  $('.select').select2({
      minimumInputLength: '1'
        });
  $(document).ready(function(){
    $('input').iCheck({
      checkboxClass: 'icheckbox_minimal',
      radioClass: 'iradio_minimal-red'
     });
    $('.picker').datepicker({
      format: "dd-mm-yyyy"
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
                      {!! Form::model($red_conocimiento, $route)!!}
                      @include('componentes.red_conocimiento.partials.form')
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
