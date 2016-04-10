@extends('layaouts.template')

@section('content')
  <section class="content">
    <div class="row">
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Agregar Profesores</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::open($route) !!}
                        @include('componentes.profesores.partials.form')    
                      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}  
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection