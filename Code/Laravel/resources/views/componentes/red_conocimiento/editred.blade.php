@extends('layaouts.tablas')
@section('scripts')
  {!!Html::script('assets/js/load_views.js')!!}
  {!!Html::script('/assets/js/base/profesor_modal.js')!!}
  {!!Html::script('/assets/js/componentes/redesConocimiento/validaRedConocimiento.js')!!}
@endsection
@section('content')
  <section class="content">
  @include('errors.partials.requesterror')
    <div class="row">
        <duiv class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Red de Conocimiento</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($red_conocimiento, $route + ['id' => 'red-conocimiento-form', 'class' => 'formulario_validado'])!!}
                      @include('componentes.red_conocimiento.partials.form')
                      {!! Form::submit('Editar', ['class' => 'btn btn-warning']) !!}&nbsp<a href="{{URL('/red-conocimiento')}}" class="btn btn-danger" >Cancelar</a>
                      {!!Form::close()!!}
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection
