@extends('layaouts.tablas')
@section('scripts')
  {!!Html::script('/assets/js/load_views.js')!!}
  {!!Html::script('/assets/js/componentes/proyectos/validaProyecto.js')!!}
  {!! Html::script('assets/js/base/profesor_modal.js') !!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        @include('errors.partials.requesterror')
          <div class="box box-solid box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar Nuevo Proyecto</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="pad">
                  {!! Form::open($route + ['class' => 'formulario_validado', 'id' => 'proyecto-proyeccion-form'])!!}
                  @include('componentes.proyectos-proyeccion.partials.form')
                  {!!Form::submit('Crear', ['class' => 'btn btn-warning'])!!}&nbsp<a href="{{URL('/proyectos-proyeccion')}}" class="btn btn-danger" >Cancelar</a>
                    {!!Form::close()!!}
                </div>
              </div><!-- /.row pad-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection
