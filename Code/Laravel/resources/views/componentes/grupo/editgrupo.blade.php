@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('input').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal-red'
      });
      $('.select').select2({
        minimumInputLength : '1'
      });
    });
  </script>
@endsection
@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
        <div class="col-md-9">
          @include('errors.partials.requesterror')
          <div class="box-header">
          </div><!-- /.box-header -->
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Grupo</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($grupo,$route)!!}@include('layaouts.partials.mensaje')
                        @include('componentes.grupo.partials.form')
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
