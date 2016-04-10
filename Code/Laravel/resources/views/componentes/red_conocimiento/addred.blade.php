@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.picker').datepicker({
        format : 'dd-mm-yyyy'
      });
      $('.picker').on('changeDate', function(ev){
          $(this).datepicker('hide');
      });
      $('.select').select2({
        minimumInputLength : '2'
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
          <div class="box box-solid box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Nueva Red de Conocimiento</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="pad">
                  {!! Form::open($route)!!}
                  @include('componentes.red_conocimiento.partials.form')
                  {!! Form::submit('Crear',['class'=>'btn btn-danger']) !!}
                  {!!Form::close()!!}
                </div>
              </div><!-- /.row pad-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection
