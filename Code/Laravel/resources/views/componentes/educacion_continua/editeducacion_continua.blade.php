@extends('layaouts.tablas')
@section('scripts')
   {!!Html::script('/assets/js/load_views.js')!!}
   {!!Html::script('/assets/js/componentes/educacionContinua/educacionContinua.js')!!}
   {!!Html::script('/assets/js/base/profesor_modal.js')!!}
   {!!Html::script('/assets/js/base/lugar_realizacion.js')!!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Educación Continua</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($educacion_continua ,$route + ['id' => 'educacion-continua-form', 'class'=>'formulario_validado'])!!}
                      @include('componentes.educacion_continua.partials.edit_form')
                      {!!Form::submit('Editar', ['class' => 'btn btn-warning'])!!}&nbsp<a href="{{URL('/educacion-continua')}}" class="btn btn-danger" >Cancelar</a>
                  {!!Form::close()!!}
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection
