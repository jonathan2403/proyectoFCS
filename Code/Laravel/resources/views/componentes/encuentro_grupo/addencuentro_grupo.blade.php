@extends('layaouts.tablas')
@section('scripts')
  {!!Html::script('/assets/js/load_views.js')!!}
@endsection
@section('content')
  <section class="content">
    <div class="row">
    @include('errors.partials.requesterror')
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Registrar Nuevo Encuentro de Grupos</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
                  <div class="box-body">
                  {!!Form::open(['route'=>'encuentro-grupo.store', 'method'=>'POST'])!!}
                    @include('componentes.encuentro_grupo.partials.form')
                  {!!Form::submit('Crear', ['class' => 'btn btn-warning'])!!}&nbsp<a href="{{URL('/encuentro-grupo')}}" class="btn btn-danger" >Cancelar</a>
                  {!!Form::close()!!}
                  </div>
              </div><!-- /.box -->
        </div> <!-- /.col -->
    </div> <!-- /.row -->
  </section><!-- /.content -->
@endsection