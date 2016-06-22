@section('scripts')
   {!!Html::script('/assets/js/base/profesor_modal.js')!!}
   {!!Html::script('/assets/js/highcharts/load_views.js')!!}
   {!!Html::script('/assets/js/componentes/proyectos/validaProyecto.js')!!}
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
                      {!! Form::model($proyecto, $route +['id' => 'proyecto-investigacion-form', 'class' => 'formulario_validado'])!!}
                        @include('componentes.proyectos-investigacion.partials.form')
                      {!! Form::submit('Editar', ['class' => 'btn btn-warning']) !!}&nbsp<a href="{{URL('/proyectos-investigacion')}}" class="btn btn-danger" >Cancelar</a>
                      {!!Form::close()!!}
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection
