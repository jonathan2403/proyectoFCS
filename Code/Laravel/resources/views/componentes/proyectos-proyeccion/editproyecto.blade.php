@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.select').select2();
      $('.picker').datepicker({
        format : 'yyyy-mm-dd',
        showAnim : 'slideDown'
      });
      $('input').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal-red'
       });
    });
  </script>
@endsection
@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Proyecto</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($proyecto,$route)!!}
                        @include('componentes.proyectos-proyeccion.partials.form')
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