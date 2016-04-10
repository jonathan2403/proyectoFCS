@extends('layaouts.tablas')

@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        <div class="box box-solid box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Editar Tipo Proyecto</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="pad">
                {!!Form::model($tipo_proyectos,$route)!!}
                @include('componentes.tipo_proyecto.partials.form')
                {!! Form::submit('Actualizar',['class'=>'btn btn-warning']) !!}
                {!!Form::close()!!}
              </div>
            </div><!-- /.row pad-->
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection
