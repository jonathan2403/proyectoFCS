@extends('layaouts.tablas')
@section('scripts')
    {!! Html::script('assets/js/load_views.js') !!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        @include('errors.partials.requesterror')
          <div class="box box-solid box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar Nueva Opción de Grado</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="pad">
                    {!! Form::open($route)!!}
                    @if($tipo == 'pas')
                      @include('componentes.opcion_grado_proyeccion.crear.pas_form')
                    @endif
                    @if($tipo == 'epps')
                      @include('componentes.opcion_grado_proyeccion.crear.epps_form')
                    @endif
                    @if($tipo == 'pos')
                      @include('componentes.opcion_grado_proyeccion.crear.pos_form')
                    @endif
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
