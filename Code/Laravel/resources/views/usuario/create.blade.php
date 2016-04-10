@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        <div class="box box-solid box-danger">
          <div class="box-header with-border">
            <h1 class="box-title">Agregar Usuario</h1>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="pad">
                {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
                @include('usuario.partials.form')  
                {!! Form::submit('Registrar',['class'=>'btn btn-danger']) !!}    
                {!!Form::close()!!}    
              </div>
            </div><!-- /.row pad-->
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div><!--/.row-->
  </section><!-- /.content -->
@endsection