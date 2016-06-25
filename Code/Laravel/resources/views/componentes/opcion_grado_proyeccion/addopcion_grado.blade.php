@extends('layaouts.tablas')
@section('scripts')
    {!! Html::script('assets/js/componentes/opcionGrado/proyeccion/validarOpcionGrado.js') !!}
    {!! Html::script('assets/js/base/profesor_modal.js') !!}
    {!! Html::script('assets/js/base/estudiante_modal.js') !!}
    {!! Html::script('assets/js/base/persona_externo_modal.js') !!}
    {!!Html::script('assets/js/load_views.js')!!}
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
                    @if($tipo == 'pas')
                    {!! Form::open($route + ['id' => 'pasantia-form', 'class' => 'formulario_validado'])!!}
                      @include('componentes.opcion_grado_proyeccion.crear.pas_form')
                    @endif
                    @if($tipo == 'epps')
                    {!! Form::open($route + ['id' => 'epps-form', 'class' => 'formulario_validado'])!!}
                      @include('componentes.opcion_grado_proyeccion.crear.epps_form')
                    @endif
                    @if($tipo == 'pos')
                    {!! Form::open($route + ['id' => 'posgrado-form', 'class' => 'formulario_validado'])!!}
                      @include('componentes.opcion_grado_proyeccion.crear.pos_form')
                    @endif
                    {!!Form::submit('Crear', ['class' => 'btn btn-warning'])!!}&nbsp<a href="{{URL('/opcion-grado-proyeccion')}}" class="btn btn-danger" >Cancelar</a>
                    {!!Form::close()!!}
                </div>
              </div><!-- /.row pad-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection
