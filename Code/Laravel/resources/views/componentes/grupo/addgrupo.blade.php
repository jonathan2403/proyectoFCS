@section('scripts')
   {!!Html::script('assets/js/load_views.js')!!}
   {!!Html::script('assets/js/componentes/grupos/validarGrupos.js')!!}
@endsection
@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        @include('errors.partials.requesterror')
          <div class="box box-solid box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar Nuevo Grupo</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="pad">
                  {!! Form::open(['url' => 'grupos/store', 'method' => 'POST', 'id' => 'grupos-form', 'class'=>'formulario_validado'])!!}
                  @include('componentes.grupo.partials.form_crear')
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
