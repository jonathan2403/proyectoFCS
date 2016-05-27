@extends('layaouts.tablas')
@section('scripts')
 {!!Html::script('/assets/js/load_views.js')!!}
@endsection
@section('content')
  <section class="content">
    @include('errors.partials.requesterror')
    <div class="row">
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Editar Publicación</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::model($publicacion,$route)!!}
                        @include('componentes.publicacion_investigacion.partials.form')
                      {!! Form::submit('Guardar',['class'=>'btn btn-danger']) !!}
                      {!!Form::close()!!}    
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection