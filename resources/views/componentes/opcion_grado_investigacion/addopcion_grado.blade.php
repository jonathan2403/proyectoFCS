@extends('layaouts.tablas')
@section('scripts')
   {!!Html::script('/assets/js/load_views.js')!!}
   {!!Html::script('/assets/js/base/profesor_modal.js')!!}
   {!!Html::script('/assets/js/buscarEntidadExterno.js')!!}
   {!! Html::script('assets/js/componentes/opcionGrado/investigacion/validarOpcionGrado.js') !!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        @include('errors.partials.requesterror')
          <div class="box box-solid box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar 
              @if($tipo == 'mr')
                Monografía de Revisión
              @elseif($tipo == 'mi')          
                Monografía Investigativa
              @else
                Proyecto EPI
              @endif
              </h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="pad">
                    @if($tipo == 'mr')
                      {!! Form::open($route + ['id' => 'mon_revision-form', 'class' => 'formulario_validado'])!!}
                      @include('componentes.opcion_grado_investigacion.crear.mr_form')
                    @endif
                    @if($tipo == 'mi')
                      {!! Form::open($route + ['id' => 'mon_investigativa-form', 'class' => 'formulario_validado'])!!}
                      @include('componentes.opcion_grado_investigacion.crear.mi_form')
                    @endif
                    @if($tipo == 'epi')
                      {!! Form::open($route + ['id' => 'epi-form', 'class' => 'formulario_validado'])!!}
                      @include('componentes.opcion_grado_investigacion.crear.epi_form')
                    @endif
                    {!! Form::submit('Crear', ['class' => 'btn btn-warning']) !!}&nbsp<a href="{{URL('/opcion-grado-investigacion')}}" class="btn btn-danger" >Cancelar</a>
                    {!!Form::close()!!}
                </div>
              </div><!-- /.row pad-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection
