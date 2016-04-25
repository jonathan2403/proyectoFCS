@extends('layaouts.tablas')
@section('scripts')
   {!!Html::script('/assets/js/load_views.js')!!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        @include('errors.partials.requesterror')
          <div class="box box-solid box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar Nueva Opción de grado</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="pad">
                    {!! Form::open($route)!!}
                    @if($tipo == 'mr')
                      @include('componentes.opcion_grado_investigacion.crear.mr_form')
                    @endif
                    @if($tipo == 'mi')
                      @include('componentes.opcion_grado_investigacion.crear.mi_form')
                    @endif
                    @if($tipo == 'epi')
                      @include('componentes.opcion_grado_investigacion.crear.epi_form')
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
