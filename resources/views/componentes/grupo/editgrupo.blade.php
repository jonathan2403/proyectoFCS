@section('scripts')
  {!!Html::script('assets/js/componentes/grupos/validarGrupos.js')!!}
  {!!Html::script('/assets/js/base/profesor_modal.js')!!}
@endsection
@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
        <div class="col-md-9">
          @include('errors.partials.requesterror')
          <div class="box-header">
          </div><!-- /.box-header -->
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Grupo</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($grupo, ['route' => 'grupos.update', 'method' => 'PUT', 'id' => 'grupos-form', 'class'=>'formulario_validado'])!!}
                        @include('componentes.grupo.partials.form_editar')
                      {!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}&nbsp<a href="{{URL('/grupos/'.$tipo_grupo)}}" class="btn btn-danger" >Cancelar</a>
                      {!!Form::close()!!}
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection
