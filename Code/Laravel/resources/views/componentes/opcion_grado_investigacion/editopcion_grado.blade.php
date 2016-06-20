@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('/assets/js/base/profesor_modal.js')!!}
{!!Html::script('/assets/js/highcharts/load_views.js')!!}
{!! Html::script('assets/js/componentes/opcionGrado/investigacion/validarOpcionGrado.js') !!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Opcion de Grado</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($opciongrado,$route + ['id' => 'mon_revision-form', 'class' => 'formulario_validado'])!!}
                      @if($opciongrado->tipo_opcion_grado == 'Mon. de Revisión')
                        @include('componentes.opcion_grado_investigacion.crear.mr_form')
                      @endif
                      @if($opciongrado->tipo_opcion_grado == 'Mon. Investigativa')
                        @include('componentes.opcion_grado_investigacion.crear.mi_form')
                      @endif
                      @if($opciongrado->tipo_opcion_grado == 'EPI')
                        @include('componentes.opcion_grado_investigacion.crear.epi_form')
                      @endif
                      {!! Form::submit('Editar', ['class' => 'btn btn-warning']) !!}&nbsp<a href="{{URL('/opcion-grado-investigacion')}}" class="btn btn-danger" >Cancelar</a>
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection
